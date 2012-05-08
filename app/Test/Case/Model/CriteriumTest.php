<?php
/* Criterium Test cases generated on: 2012-02-18 10:17:58 : 1329581878*/
App::uses('Criterium', 'Model');

/**
 * Criterium Test Case
 *
 */
class CriteriumTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.criterium', 'app.rubric');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Criterium = ClassRegistry::init('Criterium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Criterium);

		parent::tearDown();
	}

}
