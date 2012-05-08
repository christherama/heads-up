<?php
/* Seatingchart Test cases generated on: 2012-02-18 10:21:28 : 1329582088*/
App::uses('Seatingchart', 'Model');

/**
 * Seatingchart Test Case
 *
 */
class SeatingchartTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.seatingchart', 'app.section', 'app.seatingconfig');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Seatingchart = ClassRegistry::init('Seatingchart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Seatingchart);

		parent::tearDown();
	}

}
