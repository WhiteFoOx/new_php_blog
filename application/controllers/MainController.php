<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {
    
	public function indexAction() {
		$this->view->render('Главная страница');
	}
                
        public function postAction() {
		$this->view->render('Посты');
	}
        

}