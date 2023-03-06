<?php
use App\Controllers\UserController;
use App\Models\User;

include_once('../app/controller/UserController.php');
include_once ('../app/models/User.php');


spl_autoload_register(function($class){

    if(file_exists('app/controller/'.$class.'.php')){

        require_once('app/controller/'.$class.'.php');
    }

    if(file_exists('app/models/'.$class.'.php')){

        require_once('app/models/'.$class.'.php');

    }
});


$login_controller=new UserController();
$user=new User();
$login_controller->user=$user;
$login_controller->load();
