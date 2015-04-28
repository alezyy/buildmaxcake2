<?php
App::uses('AppModel', 'Model');
/**
 * propertiestypes_specifications Model
 *
 * @property Propertiestype $Propertiestype
 */
class propertiestypes_specifications extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'propertiestype_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'propertiestypes_specification' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Propertiestype' => array(
			'className' => 'Propertiestype',
			'foreignKey' => 'propertiestype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
