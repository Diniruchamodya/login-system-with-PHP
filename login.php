<?php 
include_once 'header.php';
?>

<h1>Login Page</h1>
<form action="includes/login.inc.php" method="post">
  
  <label for="email">Email</label>
  <input type="email" id="email" name="uid" placeholder="Your email..">

  <label for="password">Password</label>
  <input type="password" id="password" name="pwd" placeholder="Password">

  
  <input type="submit" value="Submit">
  <p>New Here ? <a href="signup.php">Sign Up</a></p>
</form>


<?php
include_once 'footer.php';
?>