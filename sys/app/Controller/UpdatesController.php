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
	
 	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session', 'RequestHandler', 'Paginator');

 
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
        $data['country'] = $country['Country']['name_en']."/".$country['Country']['name_pt'];

        $email = new CakeEmail();
        
        $res = $email
                        ->config('smtp')
                        ->emailFormat('html')
                        ->template('update',null)
                        ->viewVars(compact("data"))
                        ->helpers(array('Html', 'Text'))

                        ->subject('DDDMG Registration')
                        ->from(array('noreply@dddmg.org' => 'DDDMG 2015'))
                        ->to(array("info@dddmg.org" => "DDDMG 2015"))
                        ->cc(array("onicio@gmail.com" => "Onicio Neto", "denniscalazans@gmail.com"=>"Dennis Calazans"))
                        ->sender($data['Update']['email'], $data['Update']['name'])
                        ->send();


        return $res;

    }

    public function action() {
        $this->layout = 'json';
        
        $countries = $this->Update->Country->find("list", array(
            'fields' => array('Country.name_pt')
        ));

        $this->set("countries", $countries);

        //$this->set("request", $this->request->env());
        //return $this->render("debug");
        

        //If its post or PUT
        if ($this->request->is("post") || $this->request->is("put")) {

           // $this->Session->write("security_code", "123456");

            $language = ($this->request->data['language'] == "pt-BR") ? "por" : "eng";
            Configure::write('Config.language', $language); 

            //Incorrect security code
            if($this->request->data['security_code'] != $this->Session->read("security_code")) {

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

                        $res = $this->_sendMail($this->request->data);

                        unset($this->request->data['Update']['enabled']);

                        $message = __('Your contact information has been saved.');
                        $ajaxResponse = $this->ajaxResponse($this->request->data, $message);

                        //$this->request->data['emailRes'] = $res;

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


/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->Update->recursive = 0;
        $this->set('updates', $this->Paginator->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        if (!$this->Update->exists($id)) {
            throw new NotFoundException(__('Invalid update'));
        }
        $options = array('conditions' => array('Update.' . $this->Update->primaryKey => $id));
        $this->set('update', $this->Update->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->Update->create();
            if ($this->Update->save($this->request->data)) {
                $this->Session->setFlash(__('The update has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The update could not be saved. Please, try again.'));
            }
        }
        $countries = $this->Update->Country->find('list');
        $this->set(compact('countries'));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        if (!$this->Update->exists($id)) {
            throw new NotFoundException(__('Invalid update'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Update->save($this->request->data)) {
                $this->Session->setFlash(__('The update has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The update could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Update.' . $this->Update->primaryKey => $id));
            $this->request->data = $this->Update->find('first', $options);
        }
        $countries = $this->Update->Country->find('list');
        $this->set(compact('countries'));
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
        $this->Update->id = $id;
        if (!$this->Update->exists()) {
            throw new NotFoundException(__('Invalid update'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Update->delete()) {
            $this->Session->setFlash(__('The update has been deleted.'));
        } else {
            $this->Session->setFlash(__('The update could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

/**
 * admin_index method
 *
 * @return void
 */
    public function admin_index() {
        $this->Update->recursive = 0;
        $this->set('updates', $this->Paginator->paginate());
    }

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_view($id = null) {
        if (!$this->Update->exists($id)) {
            throw new NotFoundException(__('Invalid update'));
        }
        $options = array('conditions' => array('Update.' . $this->Update->primaryKey => $id));
        $this->set('update', $this->Update->find('first', $options));
    }

/**
 * admin_add method
 *
 * @return void
 */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Update->create();
            if ($this->Update->save($this->request->data)) {
                $this->Session->setFlash(__('The update has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The update could not be saved. Please, try again.'));
            }
        }
        $countries = $this->Update->Country->find('list');
        $this->set(compact('countries'));
    }

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_edit($id = null) {
        if (!$this->Update->exists($id)) {
            throw new NotFoundException(__('Invalid update'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Update->save($this->request->data)) {
                $this->Session->setFlash(__('The update has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The update could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Update.' . $this->Update->primaryKey => $id));
            $this->request->data = $this->Update->find('first', $options);
        }
        $countries = $this->Update->Country->find('list');
        $this->set(compact('countries'));
    }

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_delete($id = null) {
        $this->Update->id = $id;
        if (!$this->Update->exists()) {
            throw new NotFoundException(__('Invalid update'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Update->delete()) {
            $this->Session->setFlash(__('The update has been deleted.'));
        } else {
            $this->Session->setFlash(__('The update could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
