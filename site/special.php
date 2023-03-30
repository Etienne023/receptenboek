<?php
require "database.php";


$sql = "SELECT * FROM `recepten` WHERE Bereidingduur = (SELECT MAX(Bereidingduur) FROM recepten);";

$result = mysqli_query($conn, $sql);

$langsteDuur = mysqli_fetch_assoc($result);


$sql = "SELECT * FROM `recepten` WHERE Bereidingduur = (SELECT MAX(Bereidingduur) FROM recepten); ";

$result = mysqli_query($conn, $sql);

$makkelijkste = mysqli_fetch_assoc($result);



// var_dump($recept);
// die;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="special.css">
</head>

<body>

  <h1>Het recept dat het langste duurt om te maken</h1>
  <?php echo($langsteDuur)?>

</body>

</html>