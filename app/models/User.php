<?php
namespace App\Models;
include_once('Database.php');

class User extends Database{

   protected $user_name,$password;


    public function register($username,$password){

        $this->user_name = $username;
        $this->password = $password;

        $insert_data = "INSERT INTO `users` (`username`, `password`) VALUES ( '$username', '$password')";
        $this->run_query($insert_data);
    }

    public function login($username,$password){

        $find_pwd= "SELECT password FROM `users` WHERE username='$username'";
        $pwd = $this->get_results($find_pwd);
     

        if($pwd['password']==$password){
            return true;
        }else{
            return false;
        }
    }

    public function delete($user_name){

        $delete_user="DELETE FROM users where username ='$user_name'";
        $this->run_query($delete_user);

    }





}