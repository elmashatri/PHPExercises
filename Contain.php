<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /* 
    
    Write a PHP script to check whether a string contains a specific string?
    Sample string : 'The quick brown fox jumps over the lazy dog.'
    Check whether the said string contains the string 'jumps'.
    
    */

    $str='The quick brown fox jumps over the lazy dog.';
    if(strpos($str,'jumps')!==false){
        echo "This word is present."."<br>";
    }else{
        echo "This word is not present."."<br>";
    }
    
    ?>

    </body>
</html>