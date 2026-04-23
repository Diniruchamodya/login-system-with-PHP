<?php
if(isset($_POST["submit"])) {   
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $password2 = $_POST["confirm_password"];    
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


     $EmptyInputs = emptyInputs($username, $email, $password, $password2);
     
     if(empty($EmptyInputs)) {
        header("Location: ../signup.php?error=emptyinput");
        exit();
     }  

     if(emptyInputs($username,$password) !== false) {
        exit();
     }
     loginUser($username, $password);

} else {
    header("Location: ../login.php");
    exit();
}