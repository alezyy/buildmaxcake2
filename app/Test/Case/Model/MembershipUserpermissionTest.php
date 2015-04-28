<?php
App::uses('MembershipUserpermission', 'Model');

/**
 * MembershipUserpermission Test Case
 *
 */
class MembershipUserpermissionTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MembershipUserpermission = ClassRegistry::init('MembershipUserpermission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MembershipUserpermission);

		parent::tearDown();
	}

}
