<!DOCTYPE html>
<html>
    <body>

    <table border="1px">

    <!--<form method="POST">

    <h2>Please input your name: </h2>
    <input type="name" name="name">
    <input type="submit" value="Submit Name">

    </form>-->

    <?php
    
    /* 
    1. Write a PHP script to get the PHP version and configuration information.

    2. Write a PHP script to display the following strings.
    Sample String :
    'Tomorrow I \'ll learn PHP global variables.'
    'This is a bad command : del c:\\*.*'
    Expected Output :
    Tomorrow I 'll learn PHP global variables.
    This is a bad command : del c:\*.* 

    3. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.
    Sample Output :
    PHP Tutorial
    PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. 
    It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
    Go to the PHP Tutorial.
    */

    //phpinfo();

    /*echo "Tomorrow I\'ll learn PHP gloabla variables.";
    echo "<br>";
    echo "This is a bad command : del c:\\*.*";
    echo "<br>";*/

    /*$var='PHP Tutorial';
    echo "<h3>$var</h3>";
    echo "<br>";
    echo "PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language.";
    echo "<br>";
    echo "It is a cross-platform, HTML embedded server-side language and is espescially suited for web development.";
    echo "<br>";
    echo "Go to the $var";
    echo "<br>";*/

    /* 
    4. Create a simple HTML form and accept the user name and display the name through PHP echo statement.

    5. Write a PHP script to get the client IP address.

    6. Write a simple PHP browser detection script.
    Sample Output : Your User-Agent is: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36
    */

    /*$name=$_POST['name'];
    echo "<h3>Hello ".$name."</h3>";*/

    /*if($_SERVER['HTPP_CLIENT_IP']){
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif($_SERVER['HTTP_X_FORWARDED_FOR']){
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    echo $ip;
    echo "<br>";*/

    /*echo "Your agent is: ".$_SERVER['HTTP_USER_AGENT'];
    echo "<br>";*/

    /* 
    7. Write a PHP script to get the current file name. 

    8. Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'.
    List of components : Scheme, Host, Path
    Expected Output :
    Scheme : http
    Host : www.w3resource.com
    Path : /php-exercises/php-basic-exercises.php

    9. Write a PHP script, which changes the color of the first character of a word.
    Sample string : PHP Tutorial
    Expected Output :
    PHP Tutorial
    */

    /*$fileName=basename($_SERVER('PHP_SELF'));
    echo $fileName;
    echo "<br>";*/

    /*$url='https://www.w3resource.com/php-exercises/php-basic-exercises.php';
    $url=parse_url($url);
    echo "Scheme:".$url['scheme']."<br>";
    echo "Host:".$url['host']."<br>";
    echo "Path:".$url['path']."<br>";*/

    /* 
    10. Write a PHP script, to check whether the page is called from 'https' or 'http'.

    11. Write a PHP script to redirect a user to a different page . 
    Expected output : Redirect the user to https://www.w3resource.com/

    12. Write a simple PHP program to check that emails are valid.
    Hints : Use FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.
    Note : The PHP documentation does not say that FILTER_VALIDATE_EMAIL should pass the RFC5321.
    */

    /*if(!empty($_SERVER['HTPPS'])){
        echo "Https is enabled.";
    }else{
        echo "Http is enabled.";
    }*/

    //header('Location : https://www.w3resource.com/');

    /*$email='shatrielma@gmail.com';
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "\'$email\'=valid"."<br>";
    }else{
        echo "\'$email\'=invalid"."<br>";
    }*/

    /* 
    13. Write a e PHP script to display string, values within a table.

    14. Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/"). 

    15. Write a PHP script to get last modified information of a file. Go to the editor
    Sample filename : php-basic-exercises.php
    Sample Output : Last modified Monday, 26th June, 2017, 12:43pm
    */

    /*$a=1000;
    $b=1200;
    $c=1400;
    echo "<tr>";
    echo "<td>"."<font color=blue>Salary of Mr.A is</font>"."</td>";
    echo "<td>".$a."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><font color=blue>Salary of Mr.B is</font>"."</td>";
    echo "<td>".$b."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><font color=blue>Salary of Mr.C is</font>"."</td>";
    echo "<td>".$c."</td>";
    echo "</tr>";*/

    /*$fileName=file('https://www.w3resource.com/');
    foreach($fileName as $file=>$fname){
        echo "Line No.-{$file}:"."htmlspecialchars($fname)";
        echo "<br>";
    }*/

    /*$current_file_name=basename($_SERVER['PHP_SELF']);
    $last_modified=filemtime($current_file_name);
    echo "Last Modify: ".date('d-m-y-h-min',$last_modified);
    echo "<br>";*/

    /* 
    16. Write a PHP script to count number of lines in a file.
    Note : Store a text file name into a variable and count the number of lines of text it has.
    
    17. Write a PHP script to print current PHP version.
    */

    /*$filename=basename($_SERVER['PHP_SELF']);
    $noLine=count(file($filename));
    echo "The number of lines in file is $noLine.";
    echo "<br>";*/

    //echo "Current PHP Version:".phpversion();
    
    ?>

    </table>

    </body>
</html>