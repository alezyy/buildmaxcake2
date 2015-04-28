<?php
/**
 * MembershipUserrecordFixture
 *
 */
class MembershipUserrecordFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'tableName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pkValue' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'id_membership_user' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dateAdded' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true),
		'dateUpdated' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true),
		'id_membership_group' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'tableName_pkValue' => array('column' => array('tableName', 'pkValue'), 'unique' => 1),
			'pkValue' => array('column' => 'pkValue', 'unique' => 0),
			'tableName' => array('column' => 'tableName', 'unique' => 0)
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
			'id' => '',
			'tableName' => 'Lorem ipsum dolor sit amet',
			'pkValue' => 'Lorem ipsum dolor sit amet',
			'id_membership_user' => 'Lorem ipsum dolor ',
			'dateAdded' => '',
			'dateUpdated' => '',
			'id_membership_group' => 1
		),
	);

}
