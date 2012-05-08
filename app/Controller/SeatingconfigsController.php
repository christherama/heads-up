<?php
App::uses('AppController', 'Controller');
/**
 * Seatingconfigs Controller
 *
 * @property Seatingconfig $Seatingconfig
 */
class SeatingconfigsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Seatingconfig->recursive = 0;
		$this->set('seatingconfigs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Seatingconfig->id = $id;
		if (!$this->Seatingconfig->exists()) {
			throw new NotFoundException(__('Invalid seatingconfig'));
		}
		$this->set('seatingconfig', $this->Seatingconfig->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Seatingconfig->create();
			if ($this->Seatingconfig->save($this->request->data)) {
				$this->Session->setFlash(__('The seatingconfig has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seatingconfig could not be saved. Please, try again.'));
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
		$this->Seatingconfig->id = $id;
		if (!$this->Seatingconfig->exists()) {
			throw new NotFoundException(__('Invalid seatingconfig'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Seatingconfig->save($this->request->data)) {
				$this->Session->setFlash(__('The seatingconfig has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seatingconfig could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Seatingconfig->read(null, $id);
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
		$this->Seatingconfig->id = $id;
		if (!$this->Seatingconfig->exists()) {
			throw new NotFoundException(__('Invalid seatingconfig'));
		}
		if ($this->Seatingconfig->delete()) {
			$this->Session->setFlash(__('Seatingconfig deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Seatingconfig was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
