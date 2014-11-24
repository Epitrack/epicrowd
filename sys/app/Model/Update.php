<?php
class Update extends AppModel {

	public $belongsTo = array('Country');

	public $validate = array(
        'id' 		 	=> array('rule' => 'notEmpty'),
        'country_id' 	=> array('rule' => 'notEmpty'),
        'enabled' 		=> array('rule' => 'notEmpty'),
        'created' 		=> array('rule' => 'notEmpty'),
        'updated' 		=> array('rule' => 'notEmpty'),
        'name' 			=> array('rule' => 'notEmpty'),
        'email' 		=> array('rule' => 'notEmpty'),
        'organization' 	=> array('rule' => 'notEmpty')
    );
}
?>