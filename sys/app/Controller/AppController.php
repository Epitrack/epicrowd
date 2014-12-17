<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('HttpSocket', 'Network/Http');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public function ajaxResponse($data = null, $message = "OK", $status = TRUE) {
 
		if($data === NULL) {
			$status = FALSE;
		}

		return array(
			'status' => $status,
			'data' => $data,
			'message' => $message
		);
	}

	var $helpers = array('MenuBuilder.MenuBuilder');

	public $components = array(
        'Session'
    );



    public function beforeFilter() {
	    Configure::write('Config.language', 'por');
        //$this->Auth->allow('index', 'view');
   	
	   	$menu = array(
	        'main-menu' => array(
	            array(
	                'title' => 'Updates - CSV',
	                'url' => '/updates.csv'
	            )
	            ,array(
	                'title' => 'Updates - List',
	                'url' => '/admin/updates'
	            )
	            ,array(
	                'title' => 'Updates - Add',
	                'url' => '/admin/updates/add'
	            ),array(
	                'title' => 'Docs - List',
	                'url' => '/admin/docs'
	            )
	            ,array(
	                'title' => 'Docs - Add',
	                'url' => '/admin/docs/add'
	            )
	            ,array(
	                'title' => 'Users - List',
	                'url' => '/admin/users'
	            )
	            ,array(
	                'title' => 'Users - Add',
	                'url' => '/admin/users/add'
	            )
	            ,array(
	                'title' => 'Country - List',
	                'url' => '/admin/countries'
	            )
	            ,array(
	                'title' => 'Country - Add',
	                'url' => '/admin/countries/add'
	            )
	            ,array(
	                'title' => 'Logout',
	                'url' => '/admin/users/logout'
	            )
	        )
	    );

	    // For default settings name must be menu
	    $this->set(compact('menu'));
    }


     public function _slack($text="") {
        $http = new HttpSocket();
        $url = "https://epitrack.slack.com/services/hooks/slackbot?token=FXsBsMTzdbT18UNdvX9NQxop&channel=%23dddmg-back";
        $query = array();
        $request = array("body" => $text);
        $response = $http->post($url,$query,$request);

        return $response;
    }


	public function isAuthorized($user) {
	    // Admin can access every action
	    if (isset($user['role']) && $user['role'] === 'admin') {
	        return true;
	    }

	    // Default deny
	    return false;
	}

}
?>