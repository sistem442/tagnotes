<?php
App::uses('AppController', 'Controller');
/**
 * Notes Controller
 *
 * @property Note $Note
 * @property PaginatorComponent $Paginator
 */
class NotesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Note->recursive = 0;
                $this->set('notes', $this->Paginator->paginate('Note',array('user_id'=>$this->Auth->user('id'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Note->exists($id)) {
			throw new NotFoundException(__('Invalid note'));
		}
		$options = array('conditions' => array('Note.' . $this->Note->primaryKey => $id));
		$this->set('note', $this->Note->find('first', $options));
	}

        public function info()
        {
            echo phpinfo();
            die;
        }

                /**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Note->create();
                        $this->request->data['Note']['user_id'] = $this->Auth->user('id');
                        debug($this->Auth->user('id'));
			if ($this->Note->save($this->request->data)) {
				$this->Session->setFlash(__('The note has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The note could not be saved. Please, try again.'));
			}
		}
		$users = $this->Note->User->find('list');
		$tags = $this->Note->Tag->find('list');
		$this->set(compact('users', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Note->exists($id)) {
			throw new NotFoundException(__('Invalid note'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Note->save($this->request->data)) {
				$this->Session->setFlash(__('The note has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The note could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Note.' . $this->Note->primaryKey => $id));
			$this->request->data = $this->Note->find('first', $options);
		}
		$users = $this->Note->User->find('list');
		$tags = $this->Note->Tag->find('list');
		$this->set(compact('users', 'tags'));
                //debug($tags);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Note->id = $id;
		if (!$this->Note->exists()) {
			throw new NotFoundException(__('Invalid note'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Note->delete()) {
			$this->Session->setFlash(__('The note has been deleted.'));
		} else {
			$this->Session->setFlash(__('The note could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function isAuthorized($user) {
            // All registered users can add posts
            if ($this->action === 'add') {
                return true;
            }

            // The owner of a post can edit and delete it
            if (in_array($this->action, array('edit', 'delete'))) {
                $noteId = (int) $this->request->params['pass'][0];
                if ($this->Note->isOwnedBy($noteId, $user['id'])) {
                    return true;
                }
            }

            return parent::isAuthorized($user);
        }
}
