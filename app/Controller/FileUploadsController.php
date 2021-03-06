<?php
App::uses('AppController', 'Controller');
/**
 * FileUploads Controller
 *
 * @property FileUpload $FileUpload
 * @property PaginatorComponent $Paginator
 */
class FileUploadsController extends AppController {

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
		$this->FileUpload->recursive = 0;
		$this->set('fileUploads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FileUpload->exists($id)) {
			throw new NotFoundException(__('Invalid file upload'));
		}
		$options = array('conditions' => array('FileUpload.' . $this->FileUpload->primaryKey => $id));
		$this->set('fileUpload', $this->FileUpload->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FileUpload->create();
			if ($this->FileUpload->save($this->request->data)) {
				$this->Session->setFlash(__('The file upload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file upload could not be saved. Please, try again.'));
			}
		}
		$notes = $this->FileUpload->Note->find('list');
		$this->set(compact('notes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FileUpload->exists($id)) {
			throw new NotFoundException(__('Invalid file upload'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FileUpload->save($this->request->data)) {
				$this->Session->setFlash(__('The file upload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file upload could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FileUpload.' . $this->FileUpload->primaryKey => $id));
			$this->request->data = $this->FileUpload->find('first', $options);
		}
		$notes = $this->FileUpload->Note->find('list');
		$this->set(compact('notes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FileUpload->id = $id;
		if (!$this->FileUpload->exists()) {
			throw new NotFoundException(__('Invalid file upload'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FileUpload->delete()) {
			$this->Session->setFlash(__('The file upload has been deleted.'));
		} else {
			$this->Session->setFlash(__('The file upload could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
