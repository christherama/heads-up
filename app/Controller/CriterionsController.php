<?php
App::uses('AppController', 'Controller');
/**
 * Criterions Controller
 *
 * @property Criterion $Criterion
 */
class CriterionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Criterion->recursive = 0;
		$this->set('criterions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Criterion->id = $id;
		if (!$this->Criterion->exists()) {
			throw new NotFoundException(__('Invalid criterion'));
		}
		$this->set('criterion', $this->Criterion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Criterion->create();
			if ($this->Criterion->save($this->request->data)) {
				$this->Session->setFlash(__('The criterion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The criterion could not be saved. Please, try again.'));
			}
		}
		$rubrics = $this->Criterion->Rubric->find('list');
		$this->set(compact('rubrics'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Criterion->id = $id;
		if (!$this->Criterion->exists()) {
			throw new NotFoundException(__('Invalid criterion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Criterion->save($this->request->data)) {
				$this->Session->setFlash(__('The criterion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The criterion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Criterion->read(null, $id);
		}
		$rubrics = $this->Criterion->Rubric->find('list');
		$this->set(compact('rubrics'));
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
		$this->Criterion->id = $id;
		if (!$this->Criterion->exists()) {
			throw new NotFoundException(__('Invalid criterion'));
		}
		if ($this->Criterion->delete()) {
			$this->Session->setFlash(__('Criterion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Criterion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
