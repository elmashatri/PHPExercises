<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /* 
    
    Write a PHP script to extract the file name from the following string.
    Sample String : 'www.example.com/public_html/index.php'

    */

    $file='www.example.com/public_html/index.php';
    $filename=substr(strrchr($file,'/'),1);
    echo $filename;
    echo "<br>";
    
    ?>

    </body>
</html>