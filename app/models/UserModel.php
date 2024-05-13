<?php

class UserModel {
    public static $conn;

    public function __construct(){
        self::$conn = connect();
    }

    public static function login($username, $password){
        $sql = "SELECT * FROM user WHERE username = $username WHERE password = $password";
        $result = self::$conn->prepare($sql);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public static function logout(){
        session_destroy();
    }

    public static function register($name, $email, $password, $username, $role){
        $sql = "INSERT INTO `admin` (`id`, `ten`, `email`, `password_hash`, `tendangnhap`, `role`, `tokenid`, `trangthaionline`, `created_at`, `updated_at`) VALUES (NULL, '".$name."', '".$email."', '".$password."', '".$username."', '".$role."', '', '0', current_timestamp(), current_timestamp())";
        $result = self::$conn->prepare($sql);
        $result->execute();
    }

    public static function getUserLoggedIn(){
        $loggedIn = $_SESSION['userLoggedIn'];
        return $loggedIn;
    }
}