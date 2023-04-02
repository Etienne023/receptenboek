<?php
require "database.php";

$id = $_GET["id"];

$sql = "SELECT * from recepten where id = $id";

$result = mysqli_query($conn, $sql);

$recept = mysqli_fetch_assoc($result);

?>
    <?php include("header.php") ?>
    <?php include("nav.php") ?>
    <h1 class="title"><?php echo $recept["title"] ?></h1>
    <div class="informatie">

        <div class="benodigheden">
            <ol>
                <h2>portie grootte</h2>
                <li><?php echo $recept["portie_groten"] ?></li>
                <h2>bereidingsduur</h2>
                <li><?php echo $recept["bereidingduur"] ?></li>
                <h2>bereiding wijzen</h2>
                <li><?php echo $recept["bereiding_wijzen"] ?></li>
                <h2>ingredienten</h2>
                <li><?php echo $recept["ingredienten"] ?></li>
                <h2>moeilijkheid graad</h2>
                <li><?php echo $recept["moeilijkheid_graad"] ?></li>
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