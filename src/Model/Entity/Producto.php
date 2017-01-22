<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Producto extends Entity{
    
   public function getImagen() {
       if($this->imagen_nombre==""){
           return 'empty.svg';
       }else if(isset($this->imagen_nombre)){
            return $this->imagen_nombre;
       }
        return 'empty.svg';
    }
}
?>