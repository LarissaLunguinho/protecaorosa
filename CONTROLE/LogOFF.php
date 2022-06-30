<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        session_destroy();
        
        echo "<script>";
        echo "window.location.href='../paginicial.php';";
        echo "</script>";
        ?>
    </body>
</html>