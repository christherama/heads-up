<?php
/* Attendance Test cases generated on: 2012-02-18 10:21:24 : 1329582084*/
App::uses('Attendance', 'Model');

/**
 * Attendance Test Case
 *
 */
class AttendanceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.attendance', 'app.student', 'app.attendancetype', 'app.section');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Attendance = ClassRegistry::init('Attendance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attendance);

		parent::tearDown();
	}

}
