<?php
App::uses('Leasestype', 'Model');

/**
 * Leasestype Test Case
 *
 */
class LeasestypeTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Leasestype = ClassRegistry::init('Leasestype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Leasestype);

		parent::tearDown();
	}

}
