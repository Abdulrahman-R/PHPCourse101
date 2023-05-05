<?php
/*
$number1 = 2;
$number2 = 0;

//multi-ways if statment
if($number1 > $number2){
    echo "number1 greater than number2";
}elseif ($number1 < $number2){
    echo "number2 greater than number1";
}else{
    echo "Both number are eqaul";
}

echo"<br>";

//nested if statment

if($number1 > $number2){
    echo "number1 greater than number2 <br>";
    if($number1 > 0){
        echo "number1 is postive ";
    }elseif($number1 < 0){
        echo "number1 is nigative";
    }else{
        echo "number1 is zero";
    }
}elseif ($number1 < $number2){
    echo "number2 greater than number1 <br>";
    if($number2 > 0){
        echo "number2 is postive";
    }elseif($number2 < 0){
        echo "number2 is nigative";
    }else{
        echo "number2 is zero";
    }
}else{
    echo "Both number are eqaul <br>";
}
*/
?>

<?php
// comparison of type
/*
$username = "1";
$email = "";
if($username === 1)
    echo "Welcome Boss";
else
    echo "Type incompitablity error";
 */

?>

<?php
// comparisons with logical operator and --> && , AND, or ---> || ,OR , not --->!

$username = "Abdulrahman";
$email = "Abdulrahamn@boss.com";
if($username === "Abdulrahman" && $email === "Abdulrahamn@boss.com")
    echo "Welcome Boss";
else
    echo "Access denied";

?>
