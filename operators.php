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
include 'include/header.php';
?>
<?php
    //Arithmetic Operators 
    echo 12**2;
    echo 2+4;
    echo 2/4;
?>

<?php
 //Assignment Operators
 $x = 2000;
 $x += 24;
 echo $x;
?>

<?php
//Comparison Operators
$x = 64;
$y = 24;
if ($x >= $y){
    echo "True!";
}
else {
    echo "False!";
}
?>

<?php
//Increment/Decrement Operators 
$x = 19;
echo $x++;
echo $x;
?>

<?php
//Logical Operators 
$x = 80;
$y = 180;
if ($x == $y xor 1 == 1) {
    echo "True";
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>