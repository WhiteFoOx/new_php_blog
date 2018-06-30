<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {
    
	public function indexAction() {
		$this->view->render('Главная страница');
	}
        
        public function aboutAction() {
		$this->view->render('Обо мне');
	}
        
        public function contactAction() {
            if(!empty($_POST)){
                if($this->model->contactValidate($_POST))
                $this->view->message('succes','Форма работает'); //contact action ne nujen
            }
            $this->view->render('Контакты');
	}
        
        public function postAction() {
		$this->view->render('Посты');
	}
        

}