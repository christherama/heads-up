<?php
/* Note Test cases generated on: 2012-02-18 10:21:27 : 1329582087*/
App::uses('Note', 'Model');

/**
 * Note Test Case
 *
 */
class NoteTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.note', 'app.student', 'app.notetype');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Note = ClassRegistry::init('Note');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Note);

		parent::tearDown();
	}

}
