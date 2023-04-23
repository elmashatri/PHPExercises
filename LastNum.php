<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /* 
    
    Write a PHP script to get the characters after the last '/' in an url.
    Sample URL : 'http://www.example.com/5478631'
    
    */

    $str='http://www.example.com/5478631';
    echo substr($str, -7);
    echo "<br>";
    
    ?>

    </body>
</html>