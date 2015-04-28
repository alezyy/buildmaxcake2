<?php
App::uses('PropertiestypesSpecification', 'Model');

/**
 * PropertiestypesSpecification Test Case
 *
 */
class PropertiestypesSpecificationTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PropertiestypesSpecification = ClassRegistry::init('PropertiestypesSpecification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropertiestypesSpecification);

		parent::tearDown();
	}

}
