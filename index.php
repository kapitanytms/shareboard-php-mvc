<?php
/**
 * Created by PhpStorm.
 * User: Tamas
 * Date: 2018-03-04
 * Time: 12:05 PM
 */
//Start session
session_start();

//Include Config
require('config.php');
require ('classes/bootstrap.php');
// base controller
require ('classes/controller.php');
// base model
require ('classes/model.php');
// models
require ('models/home.php');
require ('models/share.php');
require ('models/user.php');
// controllers
require ('controllers/home.php');
require ('controllers/shares.php');
require ('controllers/users.php');

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();

if($controller) {
    $controller->executeAction();
}