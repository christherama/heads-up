<?php
App::uses('AppController', 'Controller');
/**
 * Rosters Controller
 *
 * @property Roster $Roster
 */
class RostersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Roster->recursive = 0;
		$this->set('rosters', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Roster->id = $id;
		if (!$this->Roster->exists()) {
			throw new NotFoundException(__('Invalid roster'));
		}
		$this->set('roster', $this->Roster->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Roster->create();
			if ($this->Roster->save($this->request->data)) {
				$this->Session->setFlash(__('The roster has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The roster could not be saved. Please, try again.'));
			}
		}
		$sections = $this->Roster->Section->find('list');
		$students = $this->Roster->Student->find('list');
		$this->set(compact('sections', 'students'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Roster->id = $id;
		if (!$this->Roster->exists()) {
			throw new NotFoundException(__('Invalid roster'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Roster->save($this->request->data)) {
				$this->Session->setFlash(__('The roster has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The roster could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Roster->read(null, $id);
		}
		$sections = $this->Roster->Section->find('list');
		$students = $this->Roster->Student->find('list');
		$this->set(compact('sections', 'students'));
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
		$this->Roster->id = $id;
		if (!$this->Roster->exists()) {
			throw new NotFoundException(__('Invalid roster'));
		}
		if ($this->Roster->delete()) {
			$this->Session->setFlash(__('Roster deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Roster was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
