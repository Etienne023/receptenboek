<?php
require "database.php";


$sql = "SELECT * FROM `recepten` WHERE Bereidingduur = (SELECT MAX(Bereidingduur) FROM recepten);";

$result = mysqli_query($conn, $sql);

$langsteDuur = mysqli_fetch_assoc($result);


$sql = "SELECT * FROM `recepten` WHERE moeilijkheid_graad = 'gemakkelijk'";

$result = mysqli_query($conn, $sql);

$makkelijkste = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM `recepten` WHERE ingredienten = (SELECT MAX(ingredienten) FROM recepten)";

$result = mysqli_query($conn, $sql);

$ingredienten = mysqli_fetch_assoc($result);



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
            <div class="blok">
                <h3 class="">Het recept dat het langste duurt om te maken</h3>
            </div>
            <div>
                <?php echo $langsteDuur["title"] ?>
                <img src="images/<?php echo $langsteDuur["foto"] ?>">
            </div>
            <div>
                <h4>beschrijving </h4>
                <?php echo $langsteDuur["beschrijving"] ?>
            </div>
            <div>
                <h4>hoe lang het duurt om te maken(in minuten)</h4>
                <?php echo $langsteDuur["bereidingduur"] ?>
            </div>
        </div>



        <div class="makkelijkst">
            <div class="blok">
                <h3>Het recept dat makkelijkst is om te maken</h3>
            </div>
            <div>
                <?php echo $makkelijkste["title"] ?>
                <img src="images/<?php echo $makkelijkste["foto"] ?>">
            </div>
            <div>
                <h4>beschrijving </h4>
                <?php echo $makkelijkste["beschrijving"] ?>
            </div>
            <div>
                <h4>moeilijkheids graad</h4>
                <?php echo $makkelijkste["moeilijkheid_graad"] ?>
            </div>

        </div>


        <div class="ingredienten">
            <div class="blok">
                <h3>Het recept met de minsten ingredienten</h3>
            </div>
            <div>

                <?php echo $ingredienten["title"] ?>
                <img src="images/<?php echo $ingredienten["foto"] ?>">
            </div>

            <div>
                <h4>beschrijving </h4>
                <?php echo $ingredienten["beschrijving"] ?>
            </div>
            <div>
                <h4>aantal ingredienten</h4>
                <?php echo $ingredienten["ingredienten"] ?>
            </div>

    </div>
</body>

</html>