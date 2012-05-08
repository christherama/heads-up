<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $helpers = array('Session', 'Html', 'Form', 'Time', 'Js');
	
	public $layout = 'mobile';
	
	public function beforeFilter() {
		if(!$this->Session->check('User') && $this->action != 'login' && $this->action != 'logout') {
			$this->redirect('/users/login');
			exit();
		}
	}
}