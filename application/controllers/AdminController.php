<?php

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller {
     
    public function __construct($route) {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }
        
    public function loginAction() {   
        if(isset($_SESSION['admin'])){
            $this->view->redirect('public_html/admin/posts');
        }
        if(!empty($_POST)) {
            if(!$this->model->loginValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('public_html/admin/posts');
        }
        $this->view->render('Вход');
    }
         
    public function addAction() {
        if(!empty($_POST)) {
            if(!$this->model->postValidate($_POST, 'add')) {
                $this->view->message('error', $this->model->error);
            }
            $id = $this->model->postAdd($_POST);
            if(!$id){
               $this->view->message('success', 'Ошибка обработки запроса'); 
            }

            if(!empty($_FILES['img']['tmp_name'])){
                $this->model->postUploadImage($_FILES['img']['tmp_name'], $id);
            }
            $this->view->message('success', 'Пост добавлен!');
        }
	$this->view->render('Добавление новости');
    }
        
    public function editAction() {
        if(!$this->model->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        if(!empty($_POST)) {
            if(!$this->model->postValidate($_POST, 'edit')) {
                $this->view->message('error', $this->model->error);
            }
            $this->view->message('success', 'ok');
        }
        $vars = [
            'data' => $this->model->postData($this->route['id'])[0],
        ];
	$this->view->render('Изменение поста', $vars);
    }
        
    public function deleteAction() {
        if(!$this->model->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $this->model->postDelete($this->route['id']);
        $this->view->redirect('public_html/admin/posts');
    }
        
    public function logoutAction() {
	unset($_SESSION['admin']);
        $this->view->redirect('public_html/admin/login');
    }
    
    public function postsAction() {
	$this->view->render('Посты');
    }
}