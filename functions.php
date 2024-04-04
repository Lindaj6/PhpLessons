<?php
include 'include/header.php';
?>
<?php
    echo str_replace ("Linda","Emily","Linda is tired")
?>

<br>

<?php

function newCalc($x) {
    $newnr = $x * 0.25;
    echo "Here is 25% of what you wrote: ".$newnr;
}
$x = 200;
newCalc($x);

echo "<br>";

$a = 500;
newCalc($a);
?>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>