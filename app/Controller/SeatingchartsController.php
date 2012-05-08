<?php
App::uses('AppController', 'Controller');
/**
 * Seatingcharts Controller
 *
 * @property Seatingchart $Seatingchart
 */
class SeatingchartsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Seatingchart->recursive = 0;
		$this->set('seatingcharts', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Seatingchart->id = $id;
		if (!$this->Seatingchart->exists()) {
			throw new NotFoundException(__('Invalid seatingchart'));
		}
		$this->set('seatingchart', $this->Seatingchart->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Seatingchart->create();
			if ($this->Seatingchart->save($this->request->data)) {
				$this->Session->setFlash(__('The seatingchart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seatingchart could not be saved. Please, try again.'));
			}
		}
		$sections = $this->Seatingchart->Section->find('list');
		$seatingconfigs = $this->Seatingchart->Seatingconfig->find('list');
		$this->set(compact('sections', 'seatingconfigs'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Seatingchart->id = $id;
		if (!$this->Seatingchart->exists()) {
			throw new NotFoundException(__('Invalid seatingchart'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Seatingchart->save($this->request->data)) {
				$this->Session->setFlash(__('The seatingchart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seatingchart could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Seatingchart->read(null, $id);
		}
		$sections = $this->Seatingchart->Section->find('list');
		$seatingconfigs = $this->Seatingchart->Seatingconfig->find('list');
		$this->set(compact('sections', 'seatingconfigs'));
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
		$this->Seatingchart->id = $id;
		if (!$this->Seatingchart->exists()) {
			throw new NotFoundException(__('Invalid seatingchart'));
		}
		if ($this->Seatingchart->delete()) {
			$this->Session->setFlash(__('Seatingchart deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Seatingchart was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
