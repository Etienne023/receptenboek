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

    <?php echo $langsteDuur["title"] ?>
    <div class="langsteduur">

      <h3>Het recept dat het langste duurt om te maken</h3>

      <img src="images/<?php echo $langsteDuur["foto"] ?>">

      <div>
        <h4>beschrijving </h4>
        <?php echo $langsteDuur["beschrijving"] ?>
      </div>
      <div>
        <h4>hoe lang het duurt om te maken(in minuten)</h4>
        <?php echo $langsteDuur["Bereidingduur"] ?>
      </div>

    </div>


    <?php echo $langsteDuur["title"] ?>
    <div class="makkelijkst">

      <h3>Het recept dat het langste duurt om te maken</h3>

      <img src="images/<?php echo $langsteDuur["foto"] ?>">

      <div>
        <h4>beschrijving </h4>
        <?php echo $langsteDuur["beschrijving"] ?>
      </div>
      <div>
        <h4>hoe lang het duurt om te maken(in minuten)</h4>
        <?php echo $langsteDuur["Bereidingduur"] ?>
      </div>

    </div>


    <?php echo $langsteDuur["title"] ?>
    <div class="ingredienten">

      <h3>Het recept dat het langste duurt om te maken</h3>

      <img src="images/<?php echo $langsteDuur["foto"] ?>">

      <div>
        <h4>beschrijving </h4>
        <?php echo $langsteDuur["beschrijving"] ?>
      </div>
      <div>
        <h4>hoe lang het duurt om te maken(in minuten)</h4>
        <?php echo $langsteDuur["Bereidingduur"] ?>
      </div>

    </div>
</body>

</html>