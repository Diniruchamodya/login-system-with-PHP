<?php 
include_once 'header.php';
?>

    <h1 style="text-align: center;">SignUp page</h1>

<form action="includes/signup.inc.php" method="post">
  <label for="fname">First Name</label>
  <input type="text" id="fname" name="uid" placeholder="Your name..">

  <label for="email">Email</label>
  <input type="email" id="email" name="email" placeholder="Your email..">

  <label for="password">Password</label>
  <input type="password" class="form-control" name="pwd" id="password" placeholder="Password">
   
  <label for="confirm_password">Confirm Password</label>
  <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">     

  <input type="submit" value="Submit">
</form>

<P>Already have an account? <a href="login.php">Login here</a></P>
<?php
include_once 'footer.php';
?>