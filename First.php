<!DOCTYPE html>
<html>
    <body>

    <?php
    
    /* 
    
    Write a PHP script to find the first character that is different between two strings.
    String1 : 'football'
    String2 : 'footboll'
    
    */

    $str1='football';
    $str2='footboll';
    $strpos=strspn($str1^$str2, '\0');
    printf('The difference between two strings at position %d: "%s"vs "%s"',$strpos, $str1[$strpos], $dtr2[$strpos]);
    printf("\n");
    
    ?>

    </body>
</html>