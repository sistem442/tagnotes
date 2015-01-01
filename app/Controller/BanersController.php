<?php
App::uses('AppController', 'Controller');
/**
 * Baners Controller
 *
 * @property Baner $Baner
 * @property PaginatorComponent $Paginator
 */
class BanersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Baner->recursive = 0;
		$this->set('baners', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Baner->exists($id)) {
			throw new NotFoundException(__('Invalid baner'));
		}
		$options = array('conditions' => array('Baner.' . $this->Baner->primaryKey => $id));
		$this->set('baner', $this->Baner->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Baner->create();
			if ($this->Baner->save($this->request->data)) {
				$this->Session->setFlash(__('The baner has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The baner could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Baner->exists($id)) {
			throw new NotFoundException(__('Invalid baner'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Baner->save($this->request->data)) {
				$this->Session->setFlash(__('The baner has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The baner could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Baner.' . $this->Baner->primaryKey => $id));
			$this->request->data = $this->Baner->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Baner->id = $id;
		if (!$this->Baner->exists()) {
			throw new NotFoundException(__('Invalid baner'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Baner->delete()) {
			$this->Session->setFlash(__('The baner has been deleted.'));
		} else {
			$this->Session->setFlash(__('The baner could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
