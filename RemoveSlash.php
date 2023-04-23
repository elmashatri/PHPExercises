<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /* 
    
    Write a PHP script to remove trailing slash from a string.
    Original String : 'The quick brown fox jumps over the lazy dog///'
    
    */

    $str='The quick brown fox jumps over the lazy dog///';
    echo rtrim($str, '/');
    echo "<br>";
    
    ?>

    </body>
</html>