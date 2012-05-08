<?php
App::uses('AppController', 'Controller');
/**
 * Notetypes Controller
 *
 * @property Notetype $Notetype
 */
class NotetypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Notetype->recursive = 0;
		$this->set('notetypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Notetype->id = $id;
		if (!$this->Notetype->exists()) {
			throw new NotFoundException(__('Invalid notetype'));
		}
		$this->set('notetype', $this->Notetype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Notetype->create();
			if ($this->Notetype->save($this->request->data)) {
				$this->Session->setFlash(__('The notetype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notetype could not be saved. Please, try again.'));
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
		$this->Notetype->id = $id;
		if (!$this->Notetype->exists()) {
			throw new NotFoundException(__('Invalid notetype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Notetype->save($this->request->data)) {
				$this->Session->setFlash(__('The notetype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notetype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Notetype->read(null, $id);
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
		$this->Notetype->id = $id;
		if (!$this->Notetype->exists()) {
			throw new NotFoundException(__('Invalid notetype'));
		}
		if ($this->Notetype->delete()) {
			$this->Session->setFlash(__('Notetype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Notetype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
