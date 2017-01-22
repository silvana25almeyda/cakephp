<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Cliente extends Entity{
    //put your code here
    
    PUBLIC function getFoto(){
        
        if($this->foto_tipo==""){
           return '/catalogo/'.'empty.svg';
       }else if(isset($this->foto_tipo)){
            return $this->foto;
       }
    
        return $this->foto;
    }
}
