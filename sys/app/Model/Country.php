<?php
App::uses('AppModel', 'Model');
/**
 * Country Model
 *
 * @property Update $Update
 */
class Country extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name_pt';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Update' => array(
			'className' => 'Update',
			'foreignKey' => 'country_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
