<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class DistritosTable extends Table{
    
    public function initialize(array $config){
        $this->table('distritos');
        $this->primaryKey('id');
        $this->entityClass('App\Model\Entity\Distrito');
        
        $this->displayField('nombre');
        // Relationship: many to one
        $this->belongsTo('Provincias', [
            'className' => 'Provincias',
            'foreignKey' => 'provincias_id',
            'propertyName' => 'provincia'
        ]);
    }
    
}?>

