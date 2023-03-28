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
    <h3 class="title"><?php echo $recept["title"] ?></h3>
    <div class="informatie">

        <div class="benodigheden">
            <ul>
                <h2>portie grootte</h2><li><?php echo $recept["Portie groten"] ?></li>
                <li><?php echo $recept["Bereidingduur"] ?></li>
                <li><?php echo $recept["Bereiding wijzen"] ?></li>
                <li><?php echo $recept["Moeilijkheid graad"] ?></li>
                <li><?php echo $recept["menugang"] ?></li>
            </ul>
        </div>

        <div class="foto">
            <img src="images/<?php echo $recept["foto"] ?>">
        </div>
    </div>
    <div class="beschrijving">

    </div>


</body>

</html>