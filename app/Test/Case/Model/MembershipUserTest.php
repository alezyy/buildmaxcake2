<?php
App::uses('MembershipUser', 'Model');

/**
 * MembershipUser Test Case
 *
 */
class MembershipUserTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MembershipUser = ClassRegistry::init('MembershipUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MembershipUser);

		parent::tearDown();
	}

}
