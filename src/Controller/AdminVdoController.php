<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
/**
 *AdminVdo Controller
 * *
 * @method \App\Model\Entity\AdminVdo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = []) */
class AdminVdoController extends AppController
{

    public $Vdos = NULL;

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('admin');
        $this->Vdos = TableRegistry::get('Vdos');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {        
        $adminVdo = $this->Vdos->find()->toArray();

        $this->set(compact('adminVdo'));
    }

    /**
     * View method
     *
     * @param string|null $idAdmin Vdo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminVdo = $this->AdminVdo->get($id, [
            'contain' => []
        ]);

        $this->set('adminVdo', $adminVdo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminVdo = $this->Vdos->newEntity();
        if ($this->request->is('post')) {
            $adminVdo = $this->Vdos->patchEntity($adminVdo, $this->request->getData());

            $this->loadComponent('UploadVideo');
            $file = $this->request->data['upload_file'];

            if (!is_null($file['tmp_name']) && $file['tmp_name'] != '') {
                $pathArr = $this->UploadVideo->upload($file);
                $adminVdo->path = $pathArr['path'];
                $adminVdo->fullpath = $pathArr['fullpath'];
            }


            if ($this->Vdos->save($adminVdo)) {
                $this->Flash->success(__('Theadmin vdo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Theadmin vdo could not be saved. Please, try again.'));
        }        $this->set(compact('adminVdo'));
    }

    /**
     * Edit method
     *
     * @param string|null $idAdmin Vdo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminVdo = $this->Vdos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminVdo = $this->Vdos->patchEntity($adminVdo, $this->request->getData());

            $this->loadComponent('UploadVideo');
            $file = $this->request->data['upload_file'];
            if (!is_null($file['tmp_name']) && $file['tmp_name'] != '') {
                
                unlink($adminVdo['fullpath']);

                $pathArr = $this->UploadVideo->upload($file);
                $adminVdo->path = $pathArr['path'];
                $adminVdo->fullpath = $pathArr['fullpath'];
            }

            if ($this->Vdos->save($adminVdo)) {
                $this->Flash->success(__('Theadmin vdo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Theadmin vdo could not be saved. Please, try again.'));
        }        $this->set(compact('adminVdo'));
    }

    /**
     * Delete method
     *
     * @param string|null $idAdmin Vdo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminVdo = $this->Vdos->get($id);

        unlink($adminVdo['fullpath']);

        if ($this->Vdos->delete($adminVdo)) {
            $this->Flash->success(__('Theadmin vdo has been deleted.'));
        } else {
            $this->Flash->error(__('Theadmin vdo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
