<?php
App::uses('AppModel', 'Model');
/**
 * Criterion Model
 *
 * @property Rubric $Rubric
 */
class Criterion extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'criterion_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'criterion_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'criterion_weight' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Rubric' => array(
			'className' => 'Rubric',
			'foreignKey' => 'rubric_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
