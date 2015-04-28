<?php
App::uses('ApplicationsLease', 'Model');

/**
 * ApplicationsLease Test Case
 *
 */
class ApplicationsLeaseTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ApplicationsLease = ClassRegistry::init('ApplicationsLease');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ApplicationsLease);

		parent::tearDown();
	}

}
