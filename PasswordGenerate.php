<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /* 
    
    Write a PHP script to generate simple random password [do not use rand() function] from a given string.
    Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
    Note : Password length may be 6, 7, 8 etc.
    
    */

    function passwordGenerate($chars){
        $data='123456789ABCDEFGHIJKLMNOPQRSTUVXYWZabcdefghijklmnopqrstuvxywz';
        return substr(str_shuffle($data),0,$chars);
    }

    echo passwordGenerate(6);
    echo "<br>";
    echo passwordGenerate(7);
    echo "<br>";
    echo passwordGenerate(8);
    echo "<br>";
    
    ?>

    </body>
</html>