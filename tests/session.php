<?php
session_start();
$_SESSION['login'] = "neanbzeort";
$_SESSION['isAdmin'] = "1";
?>
<html lang="fr">
<head>
    <title>session</title>
    <meta charset="UTF-8">
</head>
<main>
    <p>test des sessions</p>
    <?php
        foreach ($_SESSION as $key => $valeur){
            if (isset($_SESSION["theme"])) {
                $color = $_SESSION["theme"];
                echo "<p style='color:$color'>$key >>> $valeur<br></p>";
            }else{
                echo "<p>$key >>> $valeur<br></p>";
            }

        }
        session_destroy();
    ?>
</main>
</html>
