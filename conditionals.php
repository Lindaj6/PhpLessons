<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

</body>
</html>