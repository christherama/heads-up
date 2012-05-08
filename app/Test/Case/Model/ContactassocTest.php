<?php
/* Contactassoc Test cases generated on: 2012-02-18 10:21:25 : 1329582085*/
App::uses('Contactassoc', 'Model');

/**
 * Contactassoc Test Case
 *
 */
class ContactassocTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.contactassoc', 'app.contact', 'app.student', 'app.contacttype');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Contactassoc = ClassRegistry::init('Contactassoc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contactassoc);

		parent::tearDown();
	}

}
