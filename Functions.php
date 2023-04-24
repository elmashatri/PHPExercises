<!DOCTYPE html>
<html>
    <body>

    <?php
    
    //1. Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument. 

    /*function factorial (int $n){
        $x=1;
        for($i=1;$i<=$n-1;$i++){
            $x*=($i+1);
        }
        return $x;
    }
    echo factorial(4);
    echo "<br>";
    echo factorial(5);
    echo "<br>";
    echo factorial(6);
    echo "<br>";*/

    //2. Write a function to check whether a number is prime or not.

    /*function isPrime (int $n){
        for($i=1;$i<$n;$i++){
            if($i%$n==0){
                return 0;
            }
        }
        return 1;
    }
    $a=isPrime(5);
    if($a==0){
        echo $a." is not a prime number.";
        echo "<br>";
    }else{
        echo $a." is a prime number.";
        echo "<br>";
    }*/

    // 3. Write a function to reverse a string.

    /*function reverseString ($str){
        $n=strlen($str);
        if($n==1){
            return $str;
        }else{
            $n--;
            return reverseString(substr($str,1,$n)).substr($str,0,1);
        }
    }
    print_r(reverseString('25698'),'\n');*/

    // 4. Write a function to sort an array.

    /*function sortArray($cars){
        for($i=0;$i<count($cars);++$i){
            $min=$i;
            for($j=$i+1;$j<count($cars);$j++){
                if($cars[$j]<$cars[$min]){
                    $temp=$cars[$min];
                    $cars[$min]=$cars[$j];
                    $cars[$j]=$temp;
                }
            }
        }
        return $cars;
    }
    $cars=array("BMW","Audi","Toyota","Land Rover");
    print_r(sortArray($cars));*/  

    // 5.Write a PHP function that checks whether a string is all lower case.

    /*function isLowerCase($str){
        for($i=0;$i<strlen($str);$i++){
            if(ord($str[$i])>=ord('A') && ord($str[$i])<=ord('Z')){
                return false;
            }
        }
        return true;
    }
    var_dump(isLowerCase('abcdefgh'));
    var_dump(isLowerCase('abcdEfgh'));*/

    // 6.Write a PHP function that checks whether a passed string is a palindrome or not?

    /*function isPalindrome ($string){
        if($string==strrev($string)){
            return 1;
        }else{
            return 0;
        }
    }
    echo isPalindrome('madam');
    echo "<br>";
    echo isPalindrome('Elma');
    echo "<br>";*/
    
    ?>

    </body>
</html>