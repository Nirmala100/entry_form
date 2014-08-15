<?php
App::uses('AppController', 'Controller');
/**
 * Municipalities Controller
 *
 * @property Municipality $Municipality
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MunicipalitiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Municipality->recursive = 0;
		$this->set('municipalities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Municipality->exists($id)) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		$options = array('conditions' => array('Municipality.' . $this->Municipality->primaryKey => $id));
		$this->set('municipality', $this->Municipality->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Municipality->create();
			if ($this->Municipality->save($this->request->data)) {
				$this->Session->setFlash(__('The municipality has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipality could not be saved. Please, try again.'));
			}
		}
		$zones = $this->Municipality->Zone->find('list');
		$districts = $this->Municipality->District->find('list');
		$this->set(compact('zones', 'districts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Municipality->exists($id)) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Municipality->save($this->request->data)) {
				$this->Session->setFlash(__('The municipality has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipality could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Municipality.' . $this->Municipality->primaryKey => $id));
			$this->request->data = $this->Municipality->find('first', $options);
		}
		$zones = $this->Municipality->Zone->find('list');
		$districts = $this->Municipality->District->find('list');
		$this->set(compact('zones', 'districts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Municipality->id = $id;
		if (!$this->Municipality->exists()) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Municipality->delete()) {
			$this->Session->setFlash(__('The municipality has been deleted.'));
		} else {
			$this->Session->setFlash(__('The municipality could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Municipality->recursive = 0;
		$this->set('municipalities', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Municipality->exists($id)) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		$options = array('conditions' => array('Municipality.' . $this->Municipality->primaryKey => $id));
		$this->set('municipality', $this->Municipality->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Municipality->create();
			if ($this->Municipality->save($this->request->data)) {
				$this->Session->setFlash(__('The municipality has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipality could not be saved. Please, try again.'));
			}
		}
		$zones = $this->Municipality->Zone->find('list');
		$districts = $this->Municipality->District->find('list');
		$this->set(compact('zones', 'districts'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Municipality->exists($id)) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Municipality->save($this->request->data)) {
				$this->Session->setFlash(__('The municipality has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipality could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Municipality.' . $this->Municipality->primaryKey => $id));
			$this->request->data = $this->Municipality->find('first', $options);
		}
		$zones = $this->Municipality->Zone->find('list');
		$districts = $this->Municipality->District->find('list');
		$this->set(compact('zones', 'districts'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Municipality->id = $id;
		if (!$this->Municipality->exists()) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Municipality->delete()) {
			$this->Session->setFlash(__('The municipality has been deleted.'));
		} else {
			$this->Session->setFlash(__('The municipality could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
