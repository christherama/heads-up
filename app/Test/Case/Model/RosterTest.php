<?php
/* Roster Test cases generated on: 2012-02-18 10:21:27 : 1329582087*/
App::uses('Roster', 'Model');

/**
 * Roster Test Case
 *
 */
class RosterTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.roster', 'app.section', 'app.student');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Roster = ClassRegistry::init('Roster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Roster);

		parent::tearDown();
	}

}
