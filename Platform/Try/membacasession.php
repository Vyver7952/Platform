<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        if(isset($_SESSION['favcolor']) and isset($_SESSION['favanimal'])){
            echo "Favorite color is ".$_SESSION['favcolor'] .".<br>";
            echo "Favorite animal is ".$_SESSION['favanimal'] .".";
        } else {
            echo "Session belum di set";
        }
        ?>
    </body>
</html>