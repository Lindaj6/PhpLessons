
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="style.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>