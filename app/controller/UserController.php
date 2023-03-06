<?php
namespace App\Controllers;

session_start();
// Start the session

class UserController  {

public $user;



public function load(){

   if(isset($_POST['login_submit']) ){ // when post data is submitted


    $user_name=$_POST['user_name'];
    $pass=$_POST['pass'];



    $check_login=$this->user->login($user_name,$pass); // validate login form database 

    if($check_login){

        $_SESSION['user']=$user_name;
    }

   }

   $this->route();
}

public function route(){

    if(isset($_SESSION['user'])){ // when user is login

        return require_once('../app/views/back_end/index.php');


    }else{
        return require_once('../app/views/back_end/login.php');

    }


}




}

