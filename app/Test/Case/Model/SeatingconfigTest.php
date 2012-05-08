<?php
/* Seatingconfig Test cases generated on: 2012-02-18 10:21:28 : 1329582088*/
App::uses('Seatingconfig', 'Model');

/**
 * Seatingconfig Test Case
 *
 */
class SeatingconfigTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.seatingconfig');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Seatingconfig = ClassRegistry::init('Seatingconfig');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Seatingconfig);

		parent::tearDown();
	}

}
