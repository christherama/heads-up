<?php
App::uses('AppController', 'Controller');
App::import('model','Criterion');
/**
 * Rubrics Controller
 *
 * @property Rubric $Rubric
 */
class RubricsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rubric->recursive = 0;
		$this->set('rubrics', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Rubric->id = $id;
		if (!$this->Rubric->exists()) {
			throw new NotFoundException(__('Invalid rubric'));
		}
		$this->set('rubric', $this->Rubric->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rubric->create();
			if ($this->Rubric->save($this->request->data)) {
				$this->Session->setFlash(__('The rubric has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rubric could not be saved. Please, try again.'));
			}
		}
	}

/**
 * Add a criterion to the rubric
 */	
	public function addCriterion() {
		if ($this->request->is('post')) {
			$c = new Criterion();
			if ($c->save($this->request->data)) {
				$rubricId = $this->request->data['Criterion']['rubric_id'];
				$this->Session->setFlash(__('The criterion has been added'));
				$this->redirect(array('action' => "view/$rubricId"));
			} else {
				$this->Session->setFlash(__('The criterion could not be added. Please try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Rubric->id = $id;
		if (!$this->Rubric->exists()) {
			throw new NotFoundException(__('Invalid rubric'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rubric->save($this->request->data)) {
				$this->Session->setFlash(__('The rubric has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rubric could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Rubric->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Rubric->id = $id;
		if (!$this->Rubric->exists()) {
			throw new NotFoundException(__('Invalid rubric'));
		}
		if ($this->Rubric->delete()) {
			$this->Session->setFlash(__('Rubric deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rubric was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
