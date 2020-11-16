<?php
setcookie("testCookie","ok",time() + 120);
?>
<html lang="fr">
    <head>
        <title>titile</title>
        <meta charset="UTF-8">
    </head>
    <main>
        <p>j'ai mis un cookie sur cette page</p>
        <?php
        echo $_COOKIE['testCookie'];
        if (isset($_GET['suppr'])){
            setcookie('testCookie',"",time() - 1);
        }
        ?>
        <button onclick="window.location.href='cookie.php?suppr=1'">SUPPRIMER COOKIE</button>
    </main>
</html>
