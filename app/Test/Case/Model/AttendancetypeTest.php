<?php
/* Attendancetype Test cases generated on: 2012-02-18 10:21:24 : 1329582084*/
App::uses('Attendancetype', 'Model');

/**
 * Attendancetype Test Case
 *
 */
class AttendancetypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.attendancetype');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Attendancetype = ClassRegistry::init('Attendancetype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attendancetype);

		parent::tearDown();
	}

}
