<?php
App::uses('MaritalStatus', 'Model');

/**
 * MaritalStatus Test Case
 *
 */
class MaritalStatusTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MaritalStatus = ClassRegistry::init('MaritalStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MaritalStatus);

		parent::tearDown();
	}

}
