<?php
App::uses('MembershipGroup', 'Model');

/**
 * MembershipGroup Test Case
 *
 */
class MembershipGroupTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MembershipGroup = ClassRegistry::init('MembershipGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MembershipGroup);

		parent::tearDown();
	}

}
