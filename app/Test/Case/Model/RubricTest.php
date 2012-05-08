<?php
/* Rubric Test cases generated on: 2012-02-18 10:21:27 : 1329582087*/
App::uses('Rubric', 'Model');

/**
 * Rubric Test Case
 *
 */
class RubricTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.rubric');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Rubric = ClassRegistry::init('Rubric');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rubric);

		parent::tearDown();
	}

}
