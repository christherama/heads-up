<?php
App::uses('AppController', 'Controller');
/**
 * Attendancetypes Controller
 *
 * @property Attendancetype $Attendancetype
 */
class AttendancetypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Attendancetype->recursive = 0;
		$this->set('attendancetypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Attendancetype->id = $id;
		if (!$this->Attendancetype->exists()) {
			throw new NotFoundException(__('Invalid attendancetype'));
		}
		$this->set('attendancetype', $this->Attendancetype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Attendancetype->create();
			if ($this->Attendancetype->save($this->request->data)) {
				$this->Session->setFlash(__('The attendancetype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendancetype could not be saved. Please, try again.'));
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
		$this->Attendancetype->id = $id;
		if (!$this->Attendancetype->exists()) {
			throw new NotFoundException(__('Invalid attendancetype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Attendancetype->save($this->request->data)) {
				$this->Session->setFlash(__('The attendancetype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendancetype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Attendancetype->read(null, $id);
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
		$this->Attendancetype->id = $id;
		if (!$this->Attendancetype->exists()) {
			throw new NotFoundException(__('Invalid attendancetype'));
		}
		if ($this->Attendancetype->delete()) {
			$this->Session->setFlash(__('Attendancetype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendancetype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
