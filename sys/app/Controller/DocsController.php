<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');


/**
 * Docs Controller
 *
 * @property Doc $Doc
 * @property PaginatorComponent $Paginator
 * @property 'SessionComponent $'Session
 * @property RequestHandlerComponent $RequestHandler
 * @property CsvView.CsvView'Component $CsvView.CsvView'
 */
class DocsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
 	public $helpers = array('Html', 'Form', 'Session');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'RequestHandler', 
	    'Auth' => array(
        'loginRedirect' => array(
            'controller' => 'docs',
            'action' => 'index',
            'admin' => true
        ),
        'logoutRedirect' => array(
            'controller' => 'users',
            'action' => 'index',
            'admin' => true
        ),
        'authenticate' => array(
            'Form' => array(
                'passwordHasher' => 'Blowfish'
            )
        ),
        'authorize' => array('Controller') // Added this line
    ));


	public function beforeFilter() {
	    parent::beforeFilter();
	    
	    $this->Auth->allow('arquivo');
	}
/**
 * index method
 *
 * @return void
 */
	

public function arquivo($id = null) {



    if (!$this->Doc->exists($id)) {
        throw new NotFoundException(__('Invalid doc'));
    }
    $options = array('conditions' => array('Doc.' . $this->Doc->primaryKey => $id));

    $doc = $this->Doc->find('first', $options);
    $this->layout = 'ajax';
    //$this->response->type($doc['Doc']['mime_type']);
    
    $filename  = Inflector::slug(pathinfo($doc['Doc']['path'], PATHINFO_FILENAME)).'.'.pathinfo($doc['Doc']['path'], PATHINFO_EXTENSION);
    $name = Inflector::slug($doc['Doc']['name']." ".$doc['Doc']['created'])."_".$filename;
    $path = "webroot/uploads/";

    $doc['filename'] = $filename;
    $doc['name'] = $name;

    $doc['path'] = $path.$filename;


    $this->response->file(
        $path.$filename,
        ['download' => true, 'name' => 'foo']
    );
    $this->response->download($name);
    
    $this->set('doc', $doc);

   // return $this->response;
}


/**
 * add method
 *
 * @return void
 */
public function _sendMail($data) {

        $email = new CakeEmail();

        $res = $email
                        ->config('smtp')
                        ->emailFormat('html')
                        ->template('doc',null)
                        ->viewVars(compact("data"))
                        ->helpers(array('Html', 'Text'))

                        ->subject('DDDMG Registration')
                        ->from(array('noreply@dddmg.org' => 'DDDMG 2015'))
                        ->to(array("info@dddmg.org" => "DDDMG 2015"))
                        ->cc(array("denniscalazans@gmail.com"=>"Dennis Calazans"))
                        ->sender($data['Doc']['email'], $data['Doc']['name'])
                        ->send();


                        //->cc(array("onicio@gmail.com" => "Onicio Neto", "denniscalazans@gmail.com"=>"Dennis Calazans", "thulioph@gmail.com"=>"Thulio Philipe"))        
        return $res;

    }

 

    public function action() {
        $this->layout = 'json';

        $countries = $this->Doc->Country->find("list", array(
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
           // else if($this->Doc->findByEmail($this->request->data['Doc']['email'])) {

           //      $message = __('Your email is already registered.');
           //      $ajaxResponse = $this->ajaxResponse($this->request->data, $message, FALSE);

           //  }

            //Everythings fine
            else {

                $this->request->data['Doc']['enabled'] = 1;

                $this->Doc->create();
                $this->Doc->set($this->request->data);

                if($this->Doc->validates()) {
                    if ($this->Doc->save($this->request->data)) {



                        $country = $this->Doc->Country->findById($this->request->data['Doc']['country_id']);
                        
                        $countries_names = $country['Country']['name_en']."/".$country['Country']['name_pt'];
                        $this->request->data['country'] = $countries_names;

                        $datetime = date("d/m/Y H:i:s");
                        $this->request->data['date'] = $datetime;

                        $res = $this->_sendMail($this->request->data);

                        unset($this->request->data['Doc']['enabled']);

                        $message = __('Your contact information has been saved.');
                        $ajaxResponse = $this->ajaxResponse($this->request->data, $message);



                       

                        $fields = $this->request->data['Doc'];

                        $values = array(
                            $datetime,
                            $fields['name'], 
                            $fields['email'], 
                            $fields['organization'], 
                            $countries_names
                        );

                        $slack = "Doc Registration: ".implode(", ",$values);
                        $this->_slack($slack);

                        //$this->request->data['emailRes'] = $res;



                    } else {
                        $message = __('Your contact information could not be saved.');
                        $ajaxResponse = $this->ajaxResponse($this->request->data, $message, FALSE);
                    }
                } else {
                    $message = __('Some information are not valid: ');
                    $this->request->data['errors'] = $this->Doc->validationErrors;
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
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Doc->recursive = 0;
		$this->set('docs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Doc->exists($id)) {
			throw new NotFoundException(__('Invalid doc'));
		}
		$options = array('conditions' => array('Doc.' . $this->Doc->primaryKey => $id));
		$this->set('doc', $this->Doc->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Doc->create();
			if ($this->Doc->save($this->request->data)) {
				$this->Session->setFlash(__('The doc has been saved.'));


                $country = $this->Doc->Country->findById($this->request->data['Doc']['country_id']);
                    
                $countries_names = $country['Country']['name_en']."/".$country['Country']['name_pt'];
                $this->request->data['country'] = $countries_names;

                $datetime = date("d/m/Y H:i:s");
                $this->request->data['date'] = $datetime;


                //$link = $this->Html->url();
                $link = Router::url(array(
                    "controller" => "docs",
                    "action" => "arquivo",
                    "admin" => false,
                    $this->Doc->getInsertID()
                ));


                $this->request->data['link'] = FULL_BASE_URL.$link;


               //debug($this->request->data);
                $res = $this->_sendMail($this->request->data);



				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Doc->Country->find('list');
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
		if (!$this->Doc->exists($id)) {
			throw new NotFoundException(__('Invalid doc'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Doc->save($this->request->data)) {
				$this->Session->setFlash(__('The doc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Doc.' . $this->Doc->primaryKey => $id));
			$this->request->data = $this->Doc->find('first', $options);
		}
		$countries = $this->Doc->Country->find('list');
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
		$this->Doc->id = $id;
		if (!$this->Doc->exists()) {
			throw new NotFoundException(__('Invalid doc'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Doc->delete()) {
			$this->Session->setFlash(__('The doc has been deleted.'));
		} else {
			$this->Session->setFlash(__('The doc could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
