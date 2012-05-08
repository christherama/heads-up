<?php
/* Assignment Test cases generated on: 2012-02-18 10:21:23 : 1329582083*/
App::uses('Assignment', 'Model');

/**
 * Assignment Test Case
 *
 */
class AssignmentTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.assignment', 'app.rubric');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Assignment = ClassRegistry::init('Assignment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Assignment);

		parent::tearDown();
	}

}
