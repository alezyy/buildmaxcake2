<?php
App::uses('MembershipGrouppermission', 'Model');

/**
 * MembershipGrouppermission Test Case
 *
 */
class MembershipGrouppermissionTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MembershipGrouppermission = ClassRegistry::init('MembershipGrouppermission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MembershipGrouppermission);

		parent::tearDown();
	}

}
