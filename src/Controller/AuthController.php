<?php

namespace App\Controller;

use Cake\Event\Event;

abstract class AuthController extends AppController{
    
//  http://book.cakephp.org/3.0/en/controllers/components/authentication.html
    public function initialize(){
        parent::initialize();
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [ // Form: login por formulario
                    'userModel' => 'Usuarios',	// Se defino la tabla de login y los campos
                    'fields' => ['username' => 'username', 'password' => 'password'],
                    'passwordHasher' => [	// Se define un custom pass hasher texto plano
                        'className' => 'Plain'
                    ]
                ]
            ],
            'loginAction' => [		// Formulario login
                'controller' => 'Usuarios',
                'action' => 'login'
            ], 
            'loginRedirect' => [		// Destino luego del login 
                'controller' => 'Portal',
                'action' => 'index'
            ],
            'logoutRedirect' => [	// Destino luego del logout
                'controller' => 'Usuarios',
                'action' => 'login'
            ],
            'authError' => 'No tienes permiso de acceder',	// Acceso no autorizado
        ]);
    }

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
//        $this->Auth->allow(['index', 'view', 'display']);
    }
    
}
