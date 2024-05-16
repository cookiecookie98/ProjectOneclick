<?php

require_once('../../models/UserModel.php');

//$name, $email, $password, $username, $role

class UserController 
{
    public static $users;
    
    public function __construct(){
        self::$users = new UserModel();
    }

    public static function login($username, $password){
        return self::$users->login($username, $password);
    }

    public static function register($name, $email, $password, $username, $role){
        return self::$users->register($name, $email, $password, $username, $role);
    }

    public static function getUserLoggedIn(){
        return self::$users->getUserLoggedIn();
    }

    public static function logOut(){
        return self::$users->logout();
    }
}

?>