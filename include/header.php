
   <?php
   session_start();
   ?>
   <header>
   <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <a class="header-logo" href="index.php">
                <img src="logo.png" alt="logo">
            </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="functions.php">Functions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datatypes.php">Datatypes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="operators.php">Operators</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loops.php">Loops</a>
        <li class="nav-item">
          <a class="nav-link" href="conditionals.php">Conditionals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calculator.php">Calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendar.php">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="superglobals.php">Superglobals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="contact.php">contact</a>
        </li>
      </ul>
    <div class="header-login">
            <?php if (isset ($_SESSION['userId'])){
    echo '<form action="include/login.inc.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
</form>';
    }
    else {
  echo '<form action="include.login.inc.php" method="post">
  <input type="text" name="mailuid" placeholder="Username/E-mail...">
  <input type="password" name="pwd" placeholder="Password...">
  <button type="submit" name="login-submit">Login</button>
</form>
   <a href="signup.php">Signup</a>';
     }
?>
            </div>
  </div>
  </div>
</nav>

<?php
$_SESSION ['username'] = "Jian24Lg";
echo $_SESSION ['username'];


if (!isset($_SESSION ['username'])) {
    echo "Signned out";
}
else{
  echo "Logged in";
}
?>

