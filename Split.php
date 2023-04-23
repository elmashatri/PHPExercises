<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /* 
    
    Write a PHP script to split the following string.
    Sample string : '082307';

    */

    $str='082307';
    echo substr(chunk_split($str,2,":"),0,-1);
    echo "<br>";

    ?>

    </body>
</html>