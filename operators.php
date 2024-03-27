<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a class="nav-link active" href="conditionals.php">
conditionals
</a>
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
</body>
</html>