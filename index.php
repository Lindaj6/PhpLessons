<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "GET">
        <input type="text" name="person">
        <button> SUBMIT </button>
</form>
    <?php 
    $name = $_GET['person'];
    echo $name. " is tired.";
    print " from";
    echo 10+4;
    ?>
</body>
</html>