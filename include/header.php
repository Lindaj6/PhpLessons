
   <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
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