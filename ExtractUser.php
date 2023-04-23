<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /*
    
    Write a PHP script to extract the user name from the following email ID.
    Sample String : 'rayy@example.com'
    
    */

    $mail='rayy@example.com';
    $user=strstr($mail,'@',true);
    echo $user;
    echo "<br>";
    
    ?>

    </body>
</html>