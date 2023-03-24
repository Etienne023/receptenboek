<?php

require "database.php";


//de sql query
$sql = "SELECT * FROM recepten";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php include("nav.php") ?>
    <div class="achtergrond_plaatje">
        <img src="images/28116-6235-mx.jpg" alt="dit plaatje kan niet geladen worden ">
        <p>recepten</p>
    </div>
    <div class="vakje">
        <h2 class="naam">recepten</h2>
        <hr>
        <div class="plaatjes">
            <?php foreach ($all_recepten as $recept) : ?>
                <div class="recept">
                    <img src="images/<?php echo $recept["plaatje"] ?>">
                    <div class="tekst">
                        <h3><?php echo $recept["Naam Recept"] ?></h3>

                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</body>

</html>