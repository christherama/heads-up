<?php
App::uses('AppController', 'Controller');
/**
 * Contactassocs Controller
 *
 * @property Contactassoc $Contactassoc
 */
class ContactassocsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contactassoc->recursive = 0;
		$this->set('contactassocs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Contactassoc->id = $id;
		if (!$this->Contactassoc->exists()) {
			throw new NotFoundException(__('Invalid contactassoc'));
		}
		$this->set('contactassoc', $this->Contactassoc->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contactassoc->create();
			if ($this->Contactassoc->save($this->request->data)) {
				$this->Session->setFlash(__('The contactassoc has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contactassoc could not be saved. Please, try again.'));
			}
		}
		$contacts = $this->Contactassoc->Contact->find('list');
		$students = $this->Contactassoc->Student->find('list');
		$contacttypes = $this->Contactassoc->Contacttype->find('list');
		$this->set(compact('contacts', 'students', 'contacttypes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Contactassoc->id = $id;
		if (!$this->Contactassoc->exists()) {
			throw new NotFoundException(__('Invalid contactassoc'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contactassoc->save($this->request->data)) {
				$this->Session->setFlash(__('The contactassoc has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contactassoc could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Contactassoc->read(null, $id);
		}
		$contacts = $this->Contactassoc->Contact->find('list');
		$students = $this->Contactassoc->Student->find('list');
		$contacttypes = $this->Contactassoc->Contacttype->find('list');
		$this->set(compact('contacts', 'students', 'contacttypes'));
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
		$this->Contactassoc->id = $id;
		if (!$this->Contactassoc->exists()) {
			throw new NotFoundException(__('Invalid contactassoc'));
		}
		if ($this->Contactassoc->delete()) {
			$this->Session->setFlash(__('Contactassoc deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contactassoc was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
