
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <?php 
require "include/header.php";
?>
    <form method= "GET">
        <input type="text" name="person">
        <button> SUBMIT </button>
</form>
    <?php 
    /*$name = $_GET['person'];
    echo $name. " is tired.";
    print " from";
    echo 10+4;*/
    echo str_replace ("ah","ha","HEHE ah",);
    ?>
    <br>
    <form action="include/contact.php" method="POST">
    <input type= "text" name= "first" placeholder="First Name">
    <br>
    <input type= "text" name= "last" placeholder="Last Name">
    <br>
    <input type= "text" name= "email" placeholder="E-mail">
    <br>
    <input type= "text" name= "uid" placeholder="Username">
    <br> 
    <input type= "password" name= "pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Sign up</button>

</form>
<main>
    <div class="wrapper-main">
        <section class="section-default">
<?php 
if (isset ($_SESSION['userId'])){
    echo '<p class="login-status"> You are logged in!</p>';
 }
 else {
  echo '<p class="login-status"> You are logged out!</p>';
 }
?>
</section>
</div>
</main>
<?php
require "footer.php";
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
