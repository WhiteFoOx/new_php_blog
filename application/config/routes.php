<?php

return [
    //MainController
    'public_html' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'public_html/about' => [
        'controller' => 'main',
        'action' => 'about',
    ],
    'public_html/contact' => [
        'controller' => 'main',
        'action' => 'contact',
    ],
    'public_html/post/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'post',
    ],
    //AdminController
    'public_html/admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'public_html/admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'public_html/admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'public_html/admin/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'public_html/admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],
    'public_html/admin/posts' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
];