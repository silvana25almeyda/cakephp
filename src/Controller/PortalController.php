<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

class PortalController extends AuthController{
    
    public function index() {
        $usuario = $this->Auth->user();
        $this->set('usuario', $usuario);
    }
    
}
