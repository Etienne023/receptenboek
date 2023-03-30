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
<?php include("header.php") ?>
<?php include("nav.php") ?>

<body class="achtergrondd">
  <div class="special">
    
<div class="langsteduur">
  <h3>Het recept dat het langste duurt om te maken</h3>
  <img src="images/<?php echo $langsteDuur["foto"] ?>">
  <?php echo $langsteDuur["title"]?> 
  
  <?php echo $langsteDuur["beschrijving"]?> 
  <?php echo $langsteDuur["Bereidingduur"]?>
</div>


<div class="makkelijkst">

</div>
<div class="ingredienten">

</div>

</div>
</body>

</html>