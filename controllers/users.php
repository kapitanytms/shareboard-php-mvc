<?php
/**
 * Created by PhpStorm.
 * User: Tamas
 * Date: 2018-03-04
 * Time: 1:12 PM
 */

class Users extends Controller {
    protected function index() {
//      echo 'USERS/INDEX';
        $viewModel = new UserModel();
        $this->returnView($viewModel->index(), true);
    }
}