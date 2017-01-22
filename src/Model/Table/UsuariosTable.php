<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsuariosTable extends Table{
    
    public function initialize(array $config){
        $this->table('usuarios');
        $this->primaryKey('id');
//        $this->entityClass('App\Model\Entity\Usuario');
        
        // Relationship: many to one
        $this->belongsTo('Roles', [
            'className' => 'Roles',
            'foreignKey' => 'roles_id',
            'propertyName' => 'rol'
        ]);
    }
    public function validationDefault(Validator $validator){
        return $validator
            ->notEmpty('username', 'Nombre de usuario obligatorio')
            ->minLength('username', 8,'Longitud minima de 8 caracteres')
            ->notEmpty('password', 'Password bligatorio')
            ->notEmpty('roles', 'Rol obligatorio');
            
    }

}?>
