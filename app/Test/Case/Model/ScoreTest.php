<?php
/* Score Test cases generated on: 2012-02-18 10:21:28 : 1329582088*/
App::uses('Score', 'Model');

/**
 * Score Test Case
 *
 */
class ScoreTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.score', 'app.assignment', 'app.rubric', 'app.student', 'app.criterion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Score = ClassRegistry::init('Score');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Score);

		parent::tearDown();
	}

}
