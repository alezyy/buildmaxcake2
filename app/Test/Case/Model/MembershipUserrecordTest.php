<?php
App::uses('MembershipUserrecord', 'Model');

/**
 * MembershipUserrecord Test Case
 *
 */
class MembershipUserrecordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.membership_userrecord'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MembershipUserrecord = ClassRegistry::init('MembershipUserrecord');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MembershipUserrecord);

		parent::tearDown();
	}

}
