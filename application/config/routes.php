<?php

return [
    //main Controller
    '' => [
      'controller' => 'main',
      'action' => 'index',
      ],

    'main/index/{page:\w+}' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'about' => [
        'controller' => 'main',
        'action' => 'about',
    ],

    'portfolio' => [
        'controller' => 'main',
        'action' => 'portfolio',
    ],

    'contact' => [
        'controller' => 'main',
        'action' => 'contact',
    ],
    'post/{id:\w+}' => [
        'controller' => 'main',
        'action' => 'post',
    ],
    //AdminController
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/edit/{id:\w+}' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/delete/{id:\w+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],
    'admin/posts/{page:\w+}' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
    'admin/posts' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
    'admin/portfolio' => [
        'controller' => 'admin',
        'action' => 'portfolio',
    ],

];
