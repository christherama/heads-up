<?php
App::uses('AppModel', 'Model');
/**
 * Rubric Model
 *
 */
class Rubric extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'rubric_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'rubric_name' => array(
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
	
	public $hasMany = array(
		'Criterion' => array(
			'className' => 'Criterion',
			'foreignKey' => 'rubric_id',
			'order' => 'Criterion.criterion_order ASC, Criterion.criterion_name ASC'
		)
	);
}
