<!DOCTYPE html>
<html>
    <body>

    <table border="1px" cellpadding="0px" cellspacing="0px" width="270px">

    <?php
    
    /* 
    
    1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.
    
    */

    /*for($i=1;$i<=10;$i++){
        if($i<10){
            echo $i."-";
        }else{
            echo $i;
            echo "<br";
        }
    }*/

    // 2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.

    /*$sum=0;
    for($i=0;$i<=30;$i++){
        echo $i." ";
        $sum+=$i;
    }
    echo "<br>";
    echo "Sum:".$sum;
    echo "<br>";*/

    // 3.Create a script to construct the following pattern, using nested for loop.

    /*for($x=1;$x<=5;$x++){
        for($y=1;$y<=$x;$y++){
            echo "*";
            if($y<$x){
                echo " ";
            }
        }
        echo "<br>";
    }*/

    // 4. Create a script to construct the following pattern, using a nested for loop.

    /*for($x=1;$x<=5;$x++){
        for($y=1;$y<=$x;$y++){
            echo "*";
        }
        echo "<br>";
    }
    for($x=5;$x>=1;$x--){
        for($y=1;$y<=5;$y++){
            echo "*";
        }
        echo "<br>";
    }*/

    /* 5. Write a program to calculate and print the factorial of a number using a for loop. 
    The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24.
    */

    /*$n=8;
    $x=1;
    for($i=1;$i<=$n-1;$i++){
        $x*=($i+1);
    }
    echo "The factoriel of ".$n." is ".$x;
    echo "<br>";*/

    // 6. Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format.

    /*for($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
            echo $i.$j. " ";
        }
    }*/

    // 7.Write a program which will count the "r" characters in the text "w3resource".

    /*$txt='w3resource';
    $search='r';
    $count='0';
    for($i='0';$i<strlen($txt);$i++){
        if(substr($txt,$i,1)==$search){
            $count=$count+1;
        }
    }
    echo $count;
    echo "<br>";*/

    /*for($i=1;$i<=10;$i++){
        echo "<tr>";
        for($j=1;$j<=10;$j++){
            echo "<td>". $i."x".$j."=".$i*$j . "</td>";
        }
        echo "</tr>";
    }*/

    /*for($i=1;$i<=10;$i++){
        echo "<tr>";
        for($j=1;$j<=10;$j++){
            $sum=$i+$j;
            if($sum%2==0){
                echo "<td width=30px height=30px bgcolor=#FFFFFF>"."</td>";
            }else{
                echo "<td width=30px height=30px bgcolor=#000000>"."</td>";
            }
        }
        echo "</tr>";
    }*/

    /*for($i=1;$i<=10;$i++){
        echo "<tr>";
        for($j=1;$j<=10;$j++){
            $p=$i*$j;
            echo "<td>".$p."</td>";
        }
        echo "</tr>";
    }*/

    /* 
    
    11. Write a PHP program which iterates the integers from 1 to 50. 
    For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". 
    For numbers which are multiples of both three and five print "FizzBuzz".
    
    */

    /*for($i=1;$i<=50;$i++){
        if($i%3==0){
            echo "Fizz";
            echo "<br>";
        }
        if($i%5==0){
            echo "Buzz";
            echo "<br>";
        }
        if($i%3==0 && $i%5==0){
            echo "FizzBuzz";
            echo "<br>";
        }
    }*/

    ?>

    </table>

    </body>
</html>