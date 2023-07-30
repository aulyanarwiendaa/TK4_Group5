<?php
date_default_timezone_set("Asia/Jakarta");
if(!isset($_SESSION)) { 
    session_start(); 
}

class BaseController {
    function callasset(){
        echo "<link rel='stylesheet' href='assets/css/style.css'>";
    }
    function callconnection(){
        require_once "koneksi.php";
    }
    function callsession(){
        if(empty($_SESSION['user'])){
            header("location:view/admin-login/login.php");
        }
    }
    function callmodel(){
        return require_once ("model/model.php");
    }
}

?>