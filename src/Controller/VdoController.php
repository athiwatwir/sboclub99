<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
/**
 * Vdo Controller
 *
 *
 * @method \App\Model\Entity\Vdo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VdoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public $Vdos = NULL;

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->Vdos = TableRegistry::get('Vdos');
    }

    public function index()
    {
        $vdos = $this->Vdos->find()->toArray();

        $this->set(compact('vdos'));
    }

    
}
