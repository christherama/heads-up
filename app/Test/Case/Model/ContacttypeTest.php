<?php
/* Contacttype Test cases generated on: 2012-02-18 10:21:26 : 1329582086*/
App::uses('Contacttype', 'Model');

/**
 * Contacttype Test Case
 *
 */
class ContacttypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.contacttype');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Contacttype = ClassRegistry::init('Contacttype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contacttype);

		parent::tearDown();
	}

}
