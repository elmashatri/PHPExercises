<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /* 
    
    Write a PHP script to replace the first 'the' of the following string with 'That'.
    Sample date: 'the quick brown fox jumps over the lazy dog.'
    
    */

    $str='the quick brown fox jumps over the lazy dog.';
    echo str_ireplace('the','That',$str);
    echo "<br>";
    
    ?>

    </body>
</html>