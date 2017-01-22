<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

/**
 * Description of CategoriasController
 *
 * @author PCC-DOMINGO
 */
class CategoriasController extends AuthController{
    
     public function initialize(){
        parent::initialize();
       $this->loadComponent('Paginator');
    }
    
    public function index() {
        $query = $this->Categorias->find();
        $query = $this->paginate($query);
        $this->set('categorias', $query);
    }
    
        public $paginate = [
        'maxLimit' => 3
    ];

        
    
    public function registrar() {
        $categoria = $this->Categorias->newEntity();
        if($this->request->is('post')){
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->data);
            if( $this->Categorias->save($categoria) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        $this->set('categoria', $categoria);
    }
    
    public function editar($id = null) {
        $categoria = $this->Categorias->get($id);
        if($this->request->is('put')){ // or post <form>
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->data);
            if( $this->Categorias->save($categoria) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        $this->set('categoria', $categoria);
    }
    
    public function eliminar($id = null) {
        $categoria = $this->Categorias->get($id);
        if( $this->Categorias->delete($categoria) ) {
            $this->Flash->success('Registro eliminado correctamente');
        } else {
            $this->Flash->error('Error al momento de eliminar el registro');
        }
        $this->redirect(['action'=>'index']);
    }
    
}
?>
