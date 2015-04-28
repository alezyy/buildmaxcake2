<?php
/**
 * DepositFixture
 *
 */
class DepositFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 200, 'unsigned' => false, 'key' => 'primary'),
		'security_deposit' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 65, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'security_deposit' => ''
		),
	);

}
