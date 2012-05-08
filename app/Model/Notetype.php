<?php
App::uses('AppModel', 'Model');
/**
 * Notetype Model
 *
 */
class Notetype extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'notetype_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'notetype_name' => array(
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
