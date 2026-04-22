<?php 
include_once 'header.php';
?>

    <h1 style="text-align: center;">Welcome to the Home Page</h1>

    <form action="/action_page.php">
  <label for="fname">First Name</label>
  <input type="text" id="fname" name="firstname" placeholder="Your name..">

  <label for="email">Email</label>
  <input type="email" id="email" name="email" placeholder="Your email..">

  
  <input type="submit" value="Submit">
</form>


<?php
include_once 'footer.php';
?>