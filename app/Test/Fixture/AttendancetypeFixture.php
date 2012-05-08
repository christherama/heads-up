<?php
/* Attendancetype Fixture generated on: 2012-02-18 10:21:24 : 1329582084 */

/**
 * AttendancetypeFixture
 *
 */
class AttendancetypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'attendancetype_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'attendancetype_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'attendancetype_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'attendancetype_id' => 1,
			'attendancetype_type' => 'Lorem ipsum dolor sit amet'
		),
	);
}
