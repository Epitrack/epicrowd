<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Updates Controller
 *
 */
class UpdatesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
 	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session', 'RequestHandler');

    // public function index() {

    //     $updates = $this->Update->find('threaded', array(
    //         'conditions' => array('Update.created >=' => 1),
    //         'order' => array('Update.created', 'Update.created DESC'),
    //     ));

    //     if(!$updates) {
    //         $ajaxResponse = $this->ajaxResponse(NULL, "No updates");
    //     } else {
    //         $ajaxResponse = $this->ajaxResponse($updates);
    //     }

    //     $this->set('updates', $ajaxResponse);
    // }

    public function captcha() {
        $this->set('captcha', "O Valor vai ser... ".$this->Session->read('teste'));
    }

    public function teste() {
        $this->layout = 'ajax';
        $this->response->type("text/plain");
        $this->set('request', $this->request);
    }

    public function _sendMail($data) {


        $country = $this->Update->Country->findById($data['Update']['country_id']);
        $data['pais'] = $country['Country']['name_en']."/".$country['Country']['name_pt'];

        $email = new CakeEmail();
        $res = $email
            ->config('default')
            ->subject('DDDMG Registration')
            ->from(array('noreply@dddmg.org' => 'DDDMG 2015'))
            ->to(array("denniscalazans@gmail.com", "Dennis Calazans"))
            //->cc(array("onicio@gmail.com", "Onicio Neto"))
            ->sender($data['Update']['email'], $data['Update']['name'])
            ->send($data);

        return $res;

    }

    public function add() {
        $this->layout = 'json';
        
        $countries = $this->Update->Country->find("list", array(
            'fields' => array('Country.name_pt')
        ));

        $this->set("countries", $countries);

        //$this->set("request", $this->request->env());
        //return $this->render("debug");
        

        //If its post or PUT
        if ($this->request->is("post") || $this->request->is("put")) {

           $this->Session->write("security_code", "123456");

            $language = ($this->request->data['language'] == "pt-BR") ? "por" : "eng";
            Configure::write('Config.language', $language); 

            //Incorrect security code
            //if($this->request->data['security_code'] != $this->Session->read("security_code")) {
            if($this->request->data['security_code'] != "123456") {

                $this->request->data['real_captcha'] = $this->Session->read("security_code");

                $message = __('Wrong code. Try again.');
                $ajaxResponse = $this->ajaxResponse($this->request->data, $message, FALSE);

           } 

           //User already registered
           else if($this->Update->findByEmail($this->request->data['Update']['email'])) {

                $message = __('Your email is already registered.');
                $ajaxResponse = $this->ajaxResponse($this->request->data, $message, FALSE);

            } 

            //Everythings fine
            else {

                $this->request->data['Update']['enabled'] = 1;

                $this->Update->create();
                $this->Update->set($this->request->data);

                if($this->Update->validates()) {
                    if ($this->Update->save($this->request->data)) {

                        $message = __('Your contact information has been saved.');
                        $res = $this->_sendMail($this->request->data);
                        $this->request->data['emailRes'] = $res;
                        
                        $ajaxResponse = $this->ajaxResponse($this->request->data, $message);

                    } else {
                        $message = __('Your contact information could not be saved.');
                        $ajaxResponse = $this->ajaxResponse($this->request->data, $message, FALSE);
                    }
                } else {
                    $message = __('Some information are not valid: ');
                    $this->request->data['errors'] = $this->Update->validationErrors;
                    $ajaxResponse = $this->ajaxResponse($this->request->data, $message, FALSE);
                }

            } 

             
           
        } 

        //User access the page withou post information
        else {
            $message = __('Nothing to save!!!');
            $ajaxResponse = $this->ajaxResponse(NULL, $message, FALSE);
        }

        $this->set('ajaxResponse', $ajaxResponse);
        $this->render('json/ajaxResponse');
    }
}
