<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //Loop
    //While loop
    $x = 2;
    while ($x <= 5){
        echo "hi there<br>";
        $x++;
    }
?>
<?php
    //Do while loop
    $x = 2;
    do{
        echo "Good Morning<br>";
        $x++;  
    }
    while ($x <= 5);
?>
<?php
    //For loop
    for($x = 5; $x <= 10; $x++){
        echo "Good Afternoon<br>";
    }
?>
<?php
    //Foreach loop
    $array = array("Linda","Jade","Jake","Vincent","William");
    Foreach ($array as $loopdata){
        echo "My friend is ".$loopdata."<br>";

    }
?>
</body>
</html>