<?php
/**
 * Created by PhpStorm.
 * User: Tamas
 * Date: 2018-03-04
 * Time: 1:12 PM
 */

class Shares extends Controller {
    protected function index() {
//        echo 'SHARES/INDEX';
    $viewModel = new ShareModel();
    $this->returnView($viewModel->index(), true);
    }
    protected function add() {
//        echo 'SHARES/INDEX';
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'shares');
        }
        $viewModel = new ShareModel();
        $this->returnView($viewModel->add(), true);
    }
}