<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Component;

use Cake\Controller\Component;

/**
 * Description of Utils
 *
 * @author sakorn.s
 */
class FixturesComponent extends Component {
    
    public function getContent(){
        $url = "https://connect-th.beinsports.com/th";
        $homepage = file_get_contents($url);
        
        $ex1 = explode('<div class="container">', $homepage);
        
        
        
        
        
        return $homepage;
    }

}
