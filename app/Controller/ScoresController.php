<?php
App::uses('AppController', 'Controller');
/**
 * Scores Controller
 *
 * @property Score $Score
 */
class ScoresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Score->recursive = 0;
		$this->set('scores', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Score->id = $id;
		if (!$this->Score->exists()) {
			throw new NotFoundException(__('Invalid score'));
		}
		$this->set('score', $this->Score->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Score->create();
			if ($this->Score->save($this->request->data)) {
				$this->Session->setFlash(__('The score has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The score could not be saved. Please, try again.'));
			}
		}
		$assignments = $this->Score->Assignment->find('list');
		$students = $this->Score->Student->find('list');
		$rubrics = $this->Score->Rubric->find('list');
		$criterions = $this->Score->Criterion->find('list');
		$this->set(compact('assignments', 'students', 'rubrics', 'criterions'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Score->id = $id;
		if (!$this->Score->exists()) {
			throw new NotFoundException(__('Invalid score'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Score->save($this->request->data)) {
				$this->Session->setFlash(__('The score has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The score could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Score->read(null, $id);
		}
		$assignments = $this->Score->Assignment->find('list');
		$students = $this->Score->Student->find('list');
		$rubrics = $this->Score->Rubric->find('list');
		$criterions = $this->Score->Criterion->find('list');
		$this->set(compact('assignments', 'students', 'rubrics', 'criterions'));
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
		$this->Score->id = $id;
		if (!$this->Score->exists()) {
			throw new NotFoundException(__('Invalid score'));
		}
		if ($this->Score->delete()) {
			$this->Session->setFlash(__('Score deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Score was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
