<?php
/* Notetype Test cases generated on: 2012-02-18 10:21:27 : 1329582087*/
App::uses('Notetype', 'Model');

/**
 * Notetype Test Case
 *
 */
class NotetypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.notetype');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Notetype = ClassRegistry::init('Notetype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Notetype);

		parent::tearDown();
	}

}
