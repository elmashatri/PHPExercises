<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /*
    
    Write a PHP script to :
    a) transform a string all uppercase letters.
    b) transform a string all lowercase letters.
    c) make a string's first character uppercase.
    d) make a string's first character of all the words uppercase.
    
    */

    echo strtoupper("the quick brown fox jumps over the lazy dog.");
    echo "<br>";
    echo strtolower ("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG.");
    echo "<br>";
    echo ucfirst("the quick fox brown jumps over the lazy dog.");
    echo "<br>";
    echo ucwords("the quick brown fox jumps over the lazy dog.");
    echo "<br>";
    
    ?>

    </body>
</html>