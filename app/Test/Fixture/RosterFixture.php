<?php
/* Roster Fixture generated on: 2012-02-18 10:21:27 : 1329582087 */

/**
 * RosterFixture
 *
 */
class RosterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'roster_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'section_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'student_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'roster_id', 'unique' => 1), 'fk_student_id' => array('column' => 'student_id', 'unique' => 0), 'fk_section_id' => array('column' => 'section_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'roster_id' => 1,
			'section_id' => 1,
			'student_id' => 1
		),
	);
}
