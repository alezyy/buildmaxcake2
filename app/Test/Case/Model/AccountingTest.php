<?php
App::uses('Accounting', 'Model');

/**
 * Accounting Test Case
 *
 */
class AccountingTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Accounting = ClassRegistry::init('Accounting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Accounting);

		parent::tearDown();
	}

}
