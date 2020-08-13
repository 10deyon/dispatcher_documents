<?php

class dispatch {

    function __construct()
    {
        if (array_key_exists('actionType', $_POST)) { $this->executePro(); }
        elseif (array_key_exists('loginUser', $_POST)) { $this->loginUser(); }
        elseif (array_key_exists('logoutUser', $_POST)) { $this->logoutUser(); }
    }

    function loginUser(){
        global $db,$message,$count;

        $user = slash($_POST['email']);
        $password = slash($_POST['password']);

        $sql = $db->query("SELECT * FROM user WHERE username='$user'");
        if($sql->num_rows > 0 ){
            $id = userToId($user);
            $pass = userToId($user,'password');
            if(password_verify($password,$pass)){
                $_SESSION['userId'] = $id;
                $_SESSION['message'] = "Welcome Back ".$user;
                $tag = win_hash(32);
                status($id,1);
                header('Location:system/dashboard.php?'.$tag);
            } else {
                $count = 1;
                $message = "OOPS!!! Incorrect Password, Please Re-enter Your Password";
            }
        }
        else {
            $count = 1;
            $message = "OOPS!!! Wrong Credentials, Incorrect Email/Password";
        }
    }
    function checkLogin(){
        if($_SERVER['SCRIPT_NAME'] == '/dispatcher/login.php'){}
        elseif(isset($_SESSION['userId'])){}
//        elseif(isset($_SESSION['adminId'])){}
        else {
            header('Location:../login.php');
        }
    }
    function logoutUser(){

        $id = $this->userId();
        status($id,0);
        unset($_SESSION['userId']);
        session_destroy();
        header("Location:../login.php");
    }
    function userId(){
        $id = isset($_SESSION['userId'])?$_SESSION['userId']:'';
        return $id;
    }
    function executePro(){
        global $message,$count,$db;

        $sql = $db->query("select * from first limit 1");
        $row = $sql->fetch_object();

        $message = $row->name. ' ,'. $row->title;
    }
}

$dispatch = new dispatch();

$userId = $dispatch->userId();

$dispatch->checkLogin();

?>