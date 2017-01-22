<?php


namespace App\Model\Table;

use Cake\ORM\Table;

class ClientesTable extends Table{
    
    public function initialize(array $config){
        $this->table('clientes');
        $this->primaryKey('id');
//        $this->entityClass('App\Model\Entity\Usuario');
        
        // Relationship: many to one
        $this->belongsTo('Distritos', [
            'className' => 'Distritos',
            'foreignKey' => 'distritos_id',
            'propertyName' => 'distrito'
        ]);
        
    }
    
}
