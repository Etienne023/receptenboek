<?php
require "database.php";

$id = $_GET["id"];

$sql = "SELECT * from recepten where id = $id";

$result = mysqli_query($conn, $sql);

$recept = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="recept.css">
</head>

<body>
    <?php include("nav.php") ?>
    <h1 class="title"><?php echo $recept["title"] ?></h1>
    <div class="informatie">

        <div class="benodigheden">
            <ol>
                <h2>portie grootte</h2>
                <li><?php echo $recept["Portie_groten"] ?></li>
                <h2>bereidingsduur</h2>
                <li><?php echo $recept["Bereidingduur"] ?></li>
                <h2>bereiding wijzen</h2>
                <li><?php echo $recept["Bereiding_wijzen"] ?></li>
                <h2>moeilijkheid graad</h2>
                <li><?php echo $recept["Moeilijkheid_graad"] ?></li>
                <h2>menugang</h2>
                <li><?php echo $recept["menugang"] ?></li>
            </ol>
        </div>

        <div class="foto">
            <img src="images/<?php echo $recept["foto"] ?>">
            <div class="beschrijving">
                <h2>beschrijving</h2>
                <?php echo $recept["beschrijving"] ?>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>