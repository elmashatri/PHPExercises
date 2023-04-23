<!DOCTYPE html>
<html>
    <body>

    <?php
    
    // Write a PHP script to print letters from 'a' to 'z'.

    /*for($x=ord('a'); $x<=ord('z'); $x++){
        echo chr($x);
        echo "<br>";
    }*/

    /*
    
    Write a PHP script to get a hex dump of a string.
    Sample string : 'rayy@example.com'
    
    */

    /*$str='rayy@example.com';
    echo bin2hex($str);
    echo "<br>";*/

    /* 
    
    Write a PHP script to check whether a string contains a specific string?
    Sample string : 'The quick brown fox jumps over the lazy dog.'
    Check whether the said string contains the string 'jumps'.
    
    */

    /*$str='The quick brown fox jumps over the lazy dog.';
    if(strpos($str,'jumps')!==false){
        echo "This word is present."."<br>";
    }else{
        echo "This word is not present."."<br>";
    }*/

    /*
    
    Write a PHP script to format values in currency style.
    Sample values : value1 = 65.45, value2 = 104.35
    
    */

    /*$val1=65.45;
    $val2=104.35;
    echo sprintf("%1.2f",$val1+$val2);
    echo "<br>";*/

    /* 
    
    Write a PHP script to extract the file name from the following string.
    Sample String : 'www.example.com/public_html/index.php'

    */

    /*$file='www.example.com/public_html/index.php';
    $filename=substr(strrchr($file,'/'),1);
    echo $filename;
    echo "<br>";*/

    /*
    
    Write a PHP script to extract the user name from the following email ID.
    Sample String : 'rayy@example.com'
    
    */

    /*$mail='rayy@example.com';
    $user=strstr($mail,'@',true);
    echo $user;
    echo "<br>";*/

    /*
    
    Write a PHP script to get the filename component of the following path.
    Sample path : "https://www.w3resource.com/index.php"
    
    */

    /*$mail="https://www.w3resource.com/index.php";
    echo basename($mail, ".php");
    echo "<br>";*/

    /* 
    
    Write a PHP script to find the first character that is different between two strings.
    String1 : 'football'
    String2 : 'footboll'
    
    */

    /*$str1='football';
    $str2='footboll';
    $strpos=strspn($str1^$str2, '\0');
    printf('The difference between two strings at position %d: "%s"vs "%s"',$strpos, $str1[$strpos], $dtr2[$strpos]);
    printf("\n");*/

    /* 
    
    Write a PHP script to get the first word of a sentence.
    Original String : 'The quick brown fox'
    
    */

    /*$str="The quick brown fox.";
    echo str_replace("quick brown fox."," ",$str);
    echo "<br>";*/

    /* 
    
    Write a PHP script to insert a string at the specified position in a given string.
    Original String : 'The brown fox'
    Insert 'quick' between 'The' and 'brown'.
    
    */

    /*$original_str='The brown fox';
    $insert_str='quick';
    $insert_pos=4;
    $new_str=substr_replace($original_str, $insert_str.' ', $insert_pos, 0);
    echo $new_str;
    echo "<br>";*/

    /* 
    
    Write a PHP script to get the characters after the last '/' in an url.
    Sample URL : 'http://www.example.com/5478631'
    
    */

    /*$str='http://www.example.com/5478631';
    echo substr($str, -7);
    echo "<br>";*/

    /* 
    
    Write a PHP script to get the last three characters of a string.
    Sample String : 'rayy@example.com'
    
    */

    /*$mail='rayy@example.com';
    echo substr($mail,-3);
    echo "<br>";*/

    /* 
    
    Write a PHP script to print the next character of a specific character.
    Sample character : 'a'
    Sample character : 'z'
    
    */

    /*$ch='z';
    $next=++$ch;
    if(strlen($next)>1){
        $next=$next[0];
    }
    echo $next;
    echo "<br>";*/

    /* 
    
    Write a PHP script to generate simple random password [do not use rand() function] from a given string.
    Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
    Note : Password length may be 6, 7, 8 etc.
    
    */

    /*function passwordGenerate($chars){
        $data='123456789ABCDEFGHIJKLMNOPQRSTUVXYWZabcdefghijklmnopqrstuvxywz';
        return substr(str_shuffle($data),0,$chars);
    }

    echo passwordGenerate(6);
    echo "<br>";
    echo passwordGenerate(7);
    echo "<br>";
    echo passwordGenerate(8);
    echo "<br>";*/

    /* 
    
    Write a PHP script to remove comma(s) from the following numeric string.
    Sample String : '2,543.12'
    
    */

    /*$str='2,543.12';
    echo str_replace(',','',$str);
    echo "<br>";*/

    /* 
    
    Write a PHP script to remove a part of a string from the beginning.
    Sample string : 'rayy@example.com'
    
    */

    /*$str='rayy@example.com';
    echo substr($str,4);
    echo "<br>";*/

     /* 
    
    Write a PHP script to remove part of a string.
    Original String : 'The quick brown fox jumps over the lazy dog'
    Remove 'fox' from the above string.
    
    */

    /*$str='The quick brown fox jumps over the lazy dog.';
    echo str_replace('fox','',$str);
    echo "<br>";*/

    /* 
    
    Write a PHP script to remove trailing slash from a string.
    Original String : 'The quick brown fox jumps over the lazy dog///'
    
    */

    /*$str='The quick brown fox jumps over the lazy dog///';
    echo rtrim($str, '/');
    echo "<br>";*/

    /* 
    
    Write a PHP script to remove all leading zeroes from a string.
    Original String : '000547023.24'
    
    */

    /*$x='000547023.24';
    echo ltrim($x,'0');
    echo "<br>";*/

    /* 
    
    Write a PHP script to replace the first 'the' of the following string with 'That'.
    Sample date: 'the quick brown fox jumps over the lazy dog.'
    
    */

    /*$str='the quick brown fox jumps over the lazy dog.';
    echo str_ireplace('the','That',$str);
    echo "<br>";*/

    /*
    
    Write a PHP script to replace multiple characters from the following string.
    Sample String : '\"\1+2/3*2:2-3/4*3'
    
    */

    /*$str='\"\1+2/3*2:2-3/4*3';
    echo str_replace(str_split('\"+/*:-'),' ',$str);
    echo "<br>";*/

    /* 
    
    Write a PHP script to select first 5 words from the following string.
    Sample String : 'The quick brown fox jumps over the lazy dog'
    
    */

    /*$str='The quick brown fox jumps over the lazy dog.';
    echo implode(' ', array_slice(explode(' ',$str),0,5));
    echo "<br>";*/

    /* 
    
    Write a PHP script to split the following string.
    Sample string : '082307';

    */

    /*$str='082307';
    echo substr(chunk_split($str,2,":"),0,-1);
    echo "<br>";*/

    /*
    
    Write a PHP script to put a string in an array.
    Sample strings: "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

    */

    /*$str="Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
    $arr=explode("<br>",$str);
    var_dump($arr);*/

    /*
    
    Write a PHP script to :
    a) transform a string all uppercase letters.
    b) transform a string all lowercase letters.
    c) make a string's first character uppercase.
    d) make a string's first character of all the words uppercase.
    
    */

    /*echo strtoupper("the quick brown fox jumps over the lazy dog.");
    echo "<br>";
    echo strtolower ("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG.");
    echo "<br>";
    echo ucfirst("the quick fox brown jumps over the lazy dog.");
    echo "<br>";
    echo ucwords("the quick brown fox jumps over the lazy dog.");
    echo "<br>";*/
    
     /* 
    
    Write a PHP script to convert the value of a PHP variable to string.
    
    */

    /*$a=20;
    $str=(String)$a;
    if($a==$str){
        echo "They are the same!"."<br>";
    }
    else{
        echo "They are not the same!"."<br>";
    }*/
    
    ?>

    </body>
</html>