<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {
    public function loginAction(){
        $this->view->render('LOGIN PAGE');
    }
     
}

