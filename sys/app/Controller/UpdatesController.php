<?php

class UpdatesController extends AppController {

	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session', 'RequestHandler');

    public function index() {

    	$updates = $this->Update->find('threaded', array(
	        'conditions' => array('Update.created >=' => 1),
	        'order' => array('Update.created', 'Update.created DESC'),
	    ));

    	if(!$updates) {
    		$ajaxResponse = $this->ajaxResponse(NULL, "No updates");
    	} else {
    		$ajaxResponse = $this->ajaxResponse($updates);
    	}

    	$this->set('updates', $ajaxResponse);
    }


    public function add() {

        
        $countries = $this->Update->Country->find("list", array(
            'fields' => array('Country.name_pt')
        ));

    	$this->set("countries", $countries);
    	
        if ($this->request->is(array("post", "put"))) {
            $this->layout = 'json';
           
            if($this->Update->findByEmail($this->request->data['Update']['email'])) {
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

            
             $this->set('ajaxResponse', $ajaxResponse);
             $this->render('json/ajaxResponse');
           
        } else {
         // $message = __('Nothing to save.');
         // $ajaxResponse = $this->ajaxResponse(NULL, $message, FALSE);
        }

     
        
    }

}

?>