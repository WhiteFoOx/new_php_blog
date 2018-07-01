<?php

return [
    //MainController
    'new_php_blog' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'new_php_blog/main/index/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'new_php_blog/post/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'post',
    ],
    //AdminController
    'new_php_blog/admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'new_php_blog/admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'new_php_blog/admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'new_php_blog/admin/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'new_php_blog/admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],
    'new_php_blog/admin/posts/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
    'new_php_blog/admin/posts' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
];