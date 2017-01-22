<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
/**
 * Description of ClientesController
 *
 * @author PCC-DOMINGO
 */
class ClientesController extends AuthController{
    
    public function initialize(){
        parent::initialize();
        $this->loadModel('Distritos');
        $this->loadComponent('Paginator');
    }
    
    public $paginate = [
        'maxLimit' => 5
    ];

    public function index() {
        $query = $this->Clientes->find('all')->contain(['Distritos']);
        $query = $this->paginate($query);
       // $query1 = $this->Distritos->find('all')->contain(['Provincias']);
       // $query = $this->Provincias->find('all')->contain(['Departamentos']);
        $this->set('clientes', $query);
       // $this->set('distritos', $query1);
       // $this->set('provincias', $query);
        
    }
    
    public function registrar() {
        $cliente = $this->Clientes->newEntity();
        if($this->request->is('post')){
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            
            //para el file
            if($this->request->data['foto']['error']  == 0){
                $cliente->foto = file_get_contents($this->request->data['foto']['tmp_name']);
                $cliente->foto_tipo =$this->request->data['foto']['type'];
                $cliente->foto_tamanio = $this->request->data['foto']['size'];
            }//acaba
            
            if( $this->Clientes->save($cliente) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        $this->set('cliente', $cliente);
        
        $distritos = $this->Distritos->find('list');
        $this->set('distritos', $distritos);
    }
    
    public function editar($id = null) {
        $cliente = $this->Clientes->get($id);
        if($this->request->is('put')){ // or post <form>
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            
            //para el file
            if($this->request->data['foto']['error']  == 0){
                $cliente->foto = file_get_contents($this->request->data['foto']['tmp_name']);
                $cliente->foto_tipo =$this->request->data['foto']['type'];
                $cliente->foto_tamanio = $this->request->data['foto']['size'];
            }//acaba
            
            if( $this->Clientes->save($cliente) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        $this->set('cliente', $cliente);
        
        $query = $this->Distritos->find('list');
        $this->set('distritos', $query);
    }
    
    public function eliminar($id = null) {
        $cliente = $this->Clientes->get($id);
        if( $this->Clientes->delete($cliente) ) {
            $this->Flash->success('Registro eliminado correctamente');
        } else {
            $this->Flash->error('Error al momento de eliminar el registro');
        }
        $this->redirect(['action'=>'index']);
    }
    
    public function photo($id=null) {
        $cliente = $this->Clientes->get($id);
        
       // colocar los header
        header("Content-type: ".$cliente->foto_tipo);
    header('Content-Length: '.$cliente->foto_tamanio);
    header("Content-Disposition: inline; filename=foto.jpg"); //'Content-Disposition: attachment' si se quiere forzar la descarga

      //  var_dump($cliente->foto);
    //echo $cliente->foto; stream_get_contents
       
    echo stream_get_contents($cliente->foto);
        $this->autoRender = false;
    }
}
