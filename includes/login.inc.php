<?php
if(isset($_POST["submit"])) {   
    $username = $_POST["uid"];
    $password = $_POST["pwd"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

     if(emptyInputs($username,$password) !== false) {
        exit();
     }
     loginUser($username, $password);

} else {
    header("Location: ../login.php");
    exit();
}