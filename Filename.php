<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /*
    
    Write a PHP script to get the filename component of the following path.
    Sample path : "https://www.w3resource.com/index.php"
    
    */

    $mail="https://www.w3resource.com/index.php";
    echo basename($mail, ".php");
    echo "<br>";
    
    ?>

    </body>
</html>