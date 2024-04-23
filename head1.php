<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav class="nav-header-main"> 
            <a class="header-logo" href="index1.php">
                <img src="logo2.png" alt="logo">
            </a>
            <ul>
                <li><a href="index1.php">Home</a> </li>
                <li><a href="#">Portfolio</a> </li>
                <li><a href="#">About me</a> </li>
                <li><a href="#">Contact</a> </li>
            </ul>
        </nav>
            <div>
        <form action="include.login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
        </form>
             <a href="signup.php">Signup</a>
        <form action="include/login.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
        </form>
            </div>
    </header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
