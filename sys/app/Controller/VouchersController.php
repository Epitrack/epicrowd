<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Vouchers Controller
 *
 * @property Voucher $Voucher
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VouchersController extends AppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Session');

	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this->Voucher->recursive = 0;
		$this->set('vouchers', $this->Paginator->paginate());
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->Voucher->exists($id)) {
			throw new NotFoundException(__('Invalid voucher'));
		}
		$options = array('conditions' => array('Voucher.' . $this->Voucher->primaryKey => $id));
		$this->set('voucher', $this->Voucher->find('first', $options));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Voucher->create();
			if ($this->Voucher->save($this->request->data)) {
				if ($this->request->data['Voucher']['send_email_invite']) {
					$this->_sendMail($this->request->data);
				}
				$this->Session->setFlash(__('The voucher has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The voucher could not be saved. Please, try again.'));
			}
		}
	}

	public function _sendMail($data) {
		$email = new CakeEmail();
		$res = $email->config('smtp')->emailFormat('html')->template('voucher', null)->viewVars(compact("data"))
			->helpers(array('Html', 'Text'))->subject('Epicrowd Invitation')
			->from(array('noreply@epicrowd.org' => 'Epicrowd 2015'))
			->sender(array("info@epicrowd.org" => "Epicrowd 2015"))
			->cc(array("onicio@gmail.com" => "Onicio Neto", "denniscalazans@gmail.com" => "Dennis Calazans", "thulioph@gmail.com" => "Thulio Philipe", "email@guinetik.com" => "João Guilherme"))
			->to($data['email'], "Epicrowd")->send();
		return $res;
	}

	/**
	 * admin_delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this->Voucher->id = $id;
		if (!$this->Voucher->exists()) {
			throw new NotFoundException(__('Invalid voucher'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Voucher->delete()) {
			$this->Session->setFlash(__('The voucher has been deleted.'));
		} else {
			$this->Session->setFlash(__('The voucher could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
