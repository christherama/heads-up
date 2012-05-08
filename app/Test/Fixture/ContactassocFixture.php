<?php
/* Contactassoc Fixture generated on: 2012-02-18 10:21:25 : 1329582085 */

/**
 * ContactassocFixture
 *
 */
class ContactassocFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'contactassoc_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'student_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'contacttype_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'contactassoc_id', 'unique' => 1), 'fk_contact_id9' => array('column' => 'contact_id', 'unique' => 0), 'fk_student_id9' => array('column' => 'student_id', 'unique' => 0), 'fk_contacttype_id9' => array('column' => 'contacttype_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'contactassoc_id' => 1,
			'contact_id' => 1,
			'student_id' => 1,
			'contacttype_id' => 1
		),
	);
}
