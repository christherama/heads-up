<?php
/* Seatingconfig Fixture generated on: 2012-02-18 10:21:28 : 1329582088 */

/**
 * SeatingconfigFixture
 *
 */
class SeatingconfigFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'seatingconfig_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'seatingconfig_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'seatingconfig_rows' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'seatingconfig_cols' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'seatingconfig_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'seatingconfig_id' => 1,
			'seatingconfig_name' => 'Lorem ipsum dolor sit amet',
			'seatingconfig_rows' => 1,
			'seatingconfig_cols' => 1
		),
	);
}
