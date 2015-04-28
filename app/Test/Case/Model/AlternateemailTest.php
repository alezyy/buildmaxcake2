<?php
App::uses('Alternateemail', 'Model');

/**
 * Alternateemail Test Case
 *
 */
class AlternateemailTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Alternateemail = ClassRegistry::init('Alternateemail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alternateemail);

		parent::tearDown();
	}

}
