<?php
/**
 * Created by PhpStorm.
 * User: Tamas
 * Date: 2018-03-04
 * Time: 1:03 PM
 */

abstract class Controller {
    protected $request;
    protected $action;

    public function __construct($action, $request)
    {
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction() {
        return $this->{$this->action}();
    }

    protected function returnView($viewmodel, $fullview) {
        $view = 'views/'.get_class($this).'/'.$this->action.'.php';
        if($fullview){
            require('views/main.php');
        } else {
            require($view);
        }
    }
}