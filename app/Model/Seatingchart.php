<?php
App::uses('AppModel', 'Model');
/**
 * Seatingchart Model
 *
 * @property Section $Section
 * @property Seatingconfig $Seatingconfig
 */
class Seatingchart extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'seatingchart_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'seatingchart_students' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'section_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'seatingconfig_id' => array(
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
		'Section' => array(
			'className' => 'Section',
			'foreignKey' => 'section_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Seatingconfig' => array(
			'className' => 'Seatingconfig',
			'foreignKey' => 'seatingconfig_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
