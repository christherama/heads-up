<?php
/* Criterions Test cases generated on: 2012-02-18 10:21:33 : 1329582093*/
App::uses('Criterions', 'Controller');

/**
 * TestCriterions *
 */
class TestCriterions extends Criterions {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * Criterions Test Case
 *
 */
class CriterionsTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.course');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Criterions = new TestCriterions();
		$this->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Criterions);

		parent::tearDown();
	}

}
