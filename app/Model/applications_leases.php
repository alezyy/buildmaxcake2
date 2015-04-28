<?php
App::uses('AppModel', 'Model');
/**
 * applications_leases Model
 *
 * @property Tenant $Tenant
 * @property Property $Property
 * @property Unit $Unit
 * @property Leasestype $Leasestype
 * @property Recurringcharge $Recurringcharge
 */
class applications_leases extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'leasestype_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'automatically_end_the_lease' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
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
		'Tenant' => array(
			'className' => 'Tenant',
			'foreignKey' => 'tenant_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Property' => array(
			'className' => 'Property',
			'foreignKey' => 'property_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Unit' => array(
			'className' => 'Unit',
			'foreignKey' => 'unit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Leasestype' => array(
			'className' => 'Leasestype',
			'foreignKey' => 'leasestype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Recurringcharge' => array(
			'className' => 'Recurringcharge',
			'foreignKey' => 'recurringcharge_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
