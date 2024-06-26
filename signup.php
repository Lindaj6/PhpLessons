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
<main>
    <div class="wrapper-main">
     <section class="section-default">
        <h1>Signup</h1>
        <?php
    if (isset($_GET['error'])){
    if ($_GET["error"] == "emptyfields"){
        echo '<p class="signuperror">Fill in all fields!</p>';
    }
else if ($_GET["error"] == "invaliduidmail"){
    echo '<p class= "signuperror"> Invalid username and e-mail! </p>';
}
else if ($_GET["error"] == "invaliduid"){
    echo '<p class="signuperror"> Invalid username! </p>';
}
else if ($_GET["error"] == "invalidmail"){
    echo '<p class= "signuperror"> Invalid e-mail! </p>';
}
else if ($_GET["error"] == "passwordcheck"){
    echo '<p class= "signuperror">Your passwords do not match!</p>';
}
else if ($_GET["error"] == "usertaken"){
    echo '<p class= "signuperror">Username is already taken!</p>';
}
}

    
?>
        <form class="form-signup" action="include/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
</section>
    </div>

</main>
<?php
require "footer.php";
?>

