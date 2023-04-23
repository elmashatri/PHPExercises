<!DOCTYPE html>
<html>
    <body>

    <?php
    
    // Write a PHP script to find the maximum and minimum marks from the following set of arrays.

    /*$marks1=array(360,310,310,330,313,375,456,111,256);
    $marks2=array(350,340,356,330,321);
    $marks3=array(630,340,570,635,434,255,298);
    echo "Max:".max(max($marks1),max($marks2),max($marks3));
    echo "<br>";
    echo "Min:".min(min($marks1),min($marks2),min($marks3));
    echo "<br>";*/

    //Write a PHP script which rounds the following values with 1 decimal digit precision.

    /*$a=1.65;
    $b=-1.54;
    echo round($a,1,PHP_ROUND_HALF_UP);
    echo "<br>";
    echo round($a,1,PHP_ROUND_HALF_DOWN);
    echo "<br>";
    echo round($b,1,PHP_ROUND_HALF_EVEN);
    echo "<br>";*/

    //Write a PHP script to generate random 11 characters string of letters and numbers.

    /*$x=rand(10e12,10e16);
    echo base_convert($x,10,36);
    echo "<br>";*/

    //Write a PHP script to convert scientific notation to an int and a float.

    /*$val='4.5e3';
    $intval=(int)$val;
    $floatval=(float)$val;
    echo "Int Value:".$intval;
    echo "<br>";
    echo "Float Value:".$floatval;
    echo "<br>";*/

    //Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy.

    /*$date="2023-04-23";
    $newdate=date('d-m-y',strtotime($date));
    echo $newdate;
    echo "<br>";*/

    //Find earliest and latest dates from a list of dates.

    /*$date=array('2015-02-01', '2015-02-02', '2015-02-03');
    echo "Earliest Date:".min($date);
    echo "<br>";
    echo "Latest Date:".max($date);
    echo "<br>";*/

    //Write a PHP function to round a float away from zero to a specified number of decimal places.

    /*function roundout($value, $places=0){
        if($places<=0){
            $places=0;
        }
        $x=pow(10,$places);
        return ($value>=0?ceil($value*$x):floor($value*$x))/$x;
    }

    echo roundout(78.78001,2);
    echo "<br>";
    echo roundout(8.131001,2);
    echo "<br>";
    echo roundout(0.586001,4);
    echo '<br>';
    echo roundout(-.125481,3);
    echo "<br>";
    echo roundout(-.125481);
    echo "<br>";*/

    //Write a PHP function to get random float numbers.

    /*function rand_float($st=0, $end=1, $mul=1000000){
        if($st>$end) return false;
        return mt_rand($st*$mul, $end*$mul)/$mul;
    }

    echo rand_float();
    echo "<br>";
    echo rand_float(0.6);
    echo "<br>";
    echo rand_float(0.5,0.6);
    echo "<br>";
    echo rand_float(0,20);
    echo "<br>";
    echo rand_float(0,3,2);
    echo "<br>";
    echo rand_float(0,2,20);
    echo "<br>";*/

    //Write a PHP function to get the distance between two points on the earth.

    /*$x1=40.7127;
    $x2=51.5072;
    $y1=74.0059;
    $y2=0.1275;
    define("r",6371.01);
    $d=r*acos(sin($x1)*sin($x2)+cos($x1)*cos($x2)*cos($y1-$y2));
    echo "Distnace between two points on Earth:".$d;
    echo "<br>";*/
    
    ?>

    </body>
</html>