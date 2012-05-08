<?php
/* Criterion Test cases generated on: 2012-02-18 10:21:27 : 1329582087*/
App::uses('Criterion', 'Model');

/**
 * Criterion Test Case
 *
 */
class CriterionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.criterion', 'app.rubric');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Criterion = ClassRegistry::init('Criterion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Criterion);

		parent::tearDown();
	}

}
