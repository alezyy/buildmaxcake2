<?php
App::uses('Propertiestype', 'Model');

/**
 * Propertiestype Test Case
 *
 */
class PropertiestypeTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Propertiestype = ClassRegistry::init('Propertiestype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Propertiestype);

		parent::tearDown();
	}

}
