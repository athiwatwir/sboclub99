<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * HowToPlay Controller
 *
 *
 * @method \App\Model\Entity\HowToPlay[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HowToPlayController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        
        $this->set('title','วิธีเล่น');
    }
    
    public function baccarat(){
        
    }
    
    public function ltc(){
        $this->set('title','วิธีเล่น LTC164');
    }
    
    public function superlot99(){
        
    }
    
    public function sicbo(){
        
    }

    public function bet123(){
        $this->set('title','วิธีเล่น 123BET');
    }

}
