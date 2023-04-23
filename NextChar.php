<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /* 
    
    Write a PHP script to print the next character of a specific character.
    Sample character : 'a'
    Sample character : 'z'
    
    */

    $ch='z';
    $next=++$ch;
    if(strlen($next)>1){
        $next=$next[0];
    }
    echo $next;
    echo "<br>";
    
    ?>

    </body>
</html>