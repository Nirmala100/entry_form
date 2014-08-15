<?php
App::uses('AppController', 'Controller');
/**
 * Zones Controller
 *
 * @property Zone $Zone
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ZonesController extends AppController {

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
		$this->Zone->recursive = 0;
		$this->set('zones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Zone->exists($id)) {
			throw new NotFoundException(__('Invalid zone'));
		}
		$options = array('conditions' => array('Zone.' . $this->Zone->primaryKey => $id));
		$this->set('zone', $this->Zone->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Zone->create();
			if ($this->Zone->save($this->request->data)) {
				$this->Session->setFlash(__('The zone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zone could not be saved. Please, try again.'));
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
		if (!$this->Zone->exists($id)) {
			throw new NotFoundException(__('Invalid zone'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Zone->save($this->request->data)) {
				$this->Session->setFlash(__('The zone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zone could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Zone.' . $this->Zone->primaryKey => $id));
			$this->request->data = $this->Zone->find('first', $options);
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
		$this->Zone->id = $id;
		if (!$this->Zone->exists()) {
			throw new NotFoundException(__('Invalid zone'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Zone->delete()) {
			$this->Session->setFlash(__('The zone has been deleted.'));
		} else {
			$this->Session->setFlash(__('The zone could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Zone->recursive = 0;
		$this->set('zones', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Zone->exists($id)) {
			throw new NotFoundException(__('Invalid zone'));
		}
		$options = array('conditions' => array('Zone.' . $this->Zone->primaryKey => $id));
		$this->set('zone', $this->Zone->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Zone->create();
			if ($this->Zone->save($this->request->data)) {
				$this->Session->setFlash(__('The zone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zone could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Zone->exists($id)) {
			throw new NotFoundException(__('Invalid zone'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Zone->save($this->request->data)) {
				$this->Session->setFlash(__('The zone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zone could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Zone.' . $this->Zone->primaryKey => $id));
			$this->request->data = $this->Zone->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Zone->id = $id;
		if (!$this->Zone->exists()) {
			throw new NotFoundException(__('Invalid zone'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Zone->delete()) {
			$this->Session->setFlash(__('The zone has been deleted.'));
		} else {
			$this->Session->setFlash(__('The zone could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
