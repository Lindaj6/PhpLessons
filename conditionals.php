<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="style.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <a class="nav-link active" href="calculator.php">
calculator
</a>
<?php
    $x = 8;
    if ($x == 8) {
        echo "Spring is here.";
    } 
    elseif ($x == 10) {
        echo "Spring is almost here.";
    }
    elseif ($x == 12) {
        echo "Summer is here.";
    }
    elseif ($x == 14) {
        echo "Fall is here.";
    }
    else {
        echo "Winter is here.";
    }
?>
<?php
$x = "8";
switch ($x){
    case 6:
        echo "The answer is 6";
    break;
    case "Nature":
        echo "The answer is Nature";
    break;
    case 5:
        echo "The answer is 5";
    break;
    case 3:
        echo "The answer is 3";
    break;
    default:
    echo "There is no answer";
    
}
?>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>