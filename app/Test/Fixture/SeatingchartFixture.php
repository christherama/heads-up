<?php
/* Seatingchart Fixture generated on: 2012-02-18 10:21:28 : 1329582088 */

/**
 * SeatingchartFixture
 *
 */
class SeatingchartFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'seatingchart_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'seatingchart_students' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'seatingchart_datecreated' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'collate' => NULL, 'comment' => ''),
		'section_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'seatingconfig_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'seatingchart_id', 'unique' => 1), 'fk_section_id8' => array('column' => 'section_id', 'unique' => 0), 'fk_seatingconfig_id8' => array('column' => 'seatingconfig_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'seatingchart_id' => 1,
			'seatingchart_students' => 'Lorem ipsum dolor sit amet',
			'seatingchart_datecreated' => 1329582088,
			'section_id' => 1,
			'seatingconfig_id' => 1
		),
	);
}
