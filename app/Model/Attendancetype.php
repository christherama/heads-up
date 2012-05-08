<?php
App::uses('AppModel', 'Model');
/**
 * Attendancetype Model
 *
 */
class Attendancetype extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'attendancetype_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'attendancetype_type' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
