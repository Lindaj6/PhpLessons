<?php 
   include_once 'include/connection.php';
   ?>
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
    <form method= "GET">
        <input type="text" name="person">
        <button> SUBMIT </button>
</form>
    <?php 
    /*$name = $_GET['person'];
    echo $name. " is tired.";
    print " from";
    echo 10+4;*/
    echo str_replace ("ah","ha","HEHE ah",);
    ?>
<?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows ($result);
    if($resultCheck > 0){
while ($row = mysqli_fetch_assoc($result)){
  echo $row['user_uid'];

        }
    }
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>