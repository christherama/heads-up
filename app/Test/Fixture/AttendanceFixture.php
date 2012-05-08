<?php
/* Attendance Fixture generated on: 2012-02-18 10:21:24 : 1329582084 */

/**
 * AttendanceFixture
 *
 */
class AttendanceFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'attendance';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'attendance_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'student_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'attendance_date' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'collate' => NULL, 'comment' => ''),
		'attendancetype_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'section_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'attendance_id', 'unique' => 1), 'fk_student_id6' => array('column' => 'student_id', 'unique' => 0), 'fk_attendancetype_id6' => array('column' => 'attendancetype_id', 'unique' => 0), 'fk_section_id6' => array('column' => 'section_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'attendance_id' => 1,
			'student_id' => 1,
			'attendance_date' => 1329582084,
			'attendancetype_id' => 1,
			'section_id' => 1
		),
	);
}
