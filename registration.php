<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repeatPassword = $_POST["repeat-password"];

        if($password === $repeatPassword){
            echo "Registration successful!";
        } else {
            echo "Passwords do not match!";
        }
    }

    ?>
    <form action="registetion.php" method="post">
   <div class="container">
    <div class="form-group">
        <input type="text" class="form-control" name="fullname" id="full-name" placeholder="Full Name">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="repeat-password" id="repeat-password" placeholder="Repeat Password">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Register">
    </div>
   </div> 
   </form>
</body>
</html>