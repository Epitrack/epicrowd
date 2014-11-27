<?php
App::uses('AppController', 'Controller');
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

    public function add() {
        $this->layout = 'json';
        
        $countries = $this->Update->Country->find("list", array(
            'fields' => array('Country.name_pt')
        ));

        $this->set("countries", $countries);

        //$this->set("request", $this->request->env());
        //return $this->render("debug");
        
        if ($this->request->is("post") || $this->request->is("put")) {
           
           if($this->request->data['security_code'] != $this->Session->read("security_code")) {
                $this->request->data['real_captcha'] = $this->Session->read("security_code");

                $message = __('Wrong code. Try again.');
                $ajaxResponse = $this->ajaxResponse($this->request->data, $message, FALSE);

           } else if($this->Update->findByEmail($this->request->data['Update']['email'])) {

                $message = __('Your email is already registered.');
                $ajaxResponse = $this->ajaxResponse($this->request->data, $message, FALSE);

            } else {

                $this->request->data['Update']['enabled'] = 1;

                $this->Update->create();

                if ($this->Update->save($this->request->data)) {

                    $message = __('Your contact information has been saved.');
                    $ajaxResponse = $this->ajaxResponse($this->request->data, $message);

                } 

            } 

             
           
        } else {
            $message = __('Nothing to save!!!');
            $ajaxResponse = $this->ajaxResponse(NULL, $message, FALSE);
        }

        $this->set('ajaxResponse', $ajaxResponse);
        $this->render('json/ajaxResponse');
    }
}
