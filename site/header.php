<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepten Boek</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/recept.css">
    <link rel="stylesheet" href="css/special.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <?php

    require "database.php";

    $sql = "SELECT COUNT(*) AS aantal_recepten FROM recepten";

    $result = mysqli_query($conn, $sql);

    $optellen = mysqli_fetch_assoc($result);

    echo $optellen['aantal_recepten']
    ?>
