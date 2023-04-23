<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /* 
    
    Write a PHP script to select first 5 words from the following string.
    Sample String : 'The quick brown fox jumps over the lazy dog'
    
    */

    $str='The quick brown fox jumps over the lazy dog.';
    echo implode(' ', array_slice(explode(' ',$str),0,5));
    echo "<br>";
    
    ?>

    </body>
</html>