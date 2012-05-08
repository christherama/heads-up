<?php
App::uses('AppModel', 'Model');
/**
 * Contacttype Model
 *
 */
class Contacttype extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'contacttype_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'contacttype_type' => array(
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
