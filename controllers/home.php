<?php
/**
 * Created by PhpStorm.
 * User: Tamas
 * Date: 2018-03-04
 * Time: 1:10 PM
 */

class Home extends Controller {
    protected function index() {
//        echo 'HOME/INDEX';
        $viewModel = new HomeModel();
        $this->returnView($viewModel->index(), true);
    }
}