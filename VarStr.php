<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /* 
    
    Write a PHP script to convert the value of a PHP variable to string.
    
    */

    $a=20;
    $str=(String)$a;
    if($a==$str){
        echo "They are the same!"."<br>";
    }
    else{
        echo "They are not the same!"."<br>";
    }

    ?>

    </body>
</html>