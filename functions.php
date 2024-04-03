<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a class="nav-link active" href="datatypes.php">
datatypes
</a>
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
</body>
</html>