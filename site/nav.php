<header>
    <div class="logo"><img src="images/images.png"></div>
    <h1>receptenboek</h1>
    <nav>
        <ul class="navbar">
            <li><a href="http://localhost/index.php#">home</a></li>
            <li><a href="http://localhost/recepten.php#">recepten</a></li>
            <li><a href="http://localhost/special.php">special</a></li>
            <li><?php

                require "database.php";

                $sql = "SELECT COUNT(*) AS aantal_recepten FROM recepten";

                $result = mysqli_query($conn, $sql);

                $optellen = mysqli_fetch_assoc($result);

                echo $optellen['aantal_recepten']
                ?>
            </li>
            <li> aantal recepten</li>

        </ul>   
    </nav>
</header>