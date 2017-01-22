<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Controller;
/**
 * Description of CorreoController
 *
 * @author Profe
 */
use Cake\Mailer\Email;

class CorreoController  extends AuthController{

    public function smtp() {
        $email = new Email('default'); // Seleccionar el profile a usar
        $email->from(['tienda@tecsup.edu.pe' => 'Tienda Online'])
            ->to('silvana_almeyda@outlook.com')
            ->subject('Correo desde CakePHP 3')
            ->send('Contenido del correo ...Hello!!');
        
       // echo 'Correo enviado';
        //$this->autoRender = false; // Solo para este ejemplo no se usará una vista
        $this->Flash->success('Correo enviado satisfactoriamente');
    return $this->redirect(['controller'=>'Portal','action'=>'index']);
        }

}
