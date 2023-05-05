

<form action = "lesson9Arrays.php" method="GET">
    <input type="text" name="xname" >
    <input type="submit">


</form>

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
//arrays
//$family = array("Father","Mother","Son");
$family = ["Father","Mother","Son"];
$family[1] = "THE NUMBER 1 FOR ME";
//echo $family[1];
//echo "<br>";

$family[3]= "Daughter";
//echo $family[3];
//echo "<br>";

//echo count($family);
//echo "<br>";

//Associative Array
// KEY = VALUE 
$employees = [
    "CEO" => "Abdulrahman",
    "Developer" => "Abdullah",
    "Artist" => "Habib"
    
];

 //echo $employees["Developer"];
 //echo "<br>";


 //example of associative array
 /*
 $xname = $_GET["xname"];
 echo $employees[$xname];
*/
 //you can do a simlar example with the following array
//nested arrays

$xname = $_GET["xname"];

 $score = [
    "Ahmed" => ["Score"=> "90","Grade"=>"A"],
    "Majed" => ["Score"=> "80","Grade"=>"B"],
    "Abdullah" => ["Score"=> "70","Grade"=>"C"]
 ];

  echo "Score: " . $score[$xname]["Score"];
  echo "<br>";
  echo "Grade: " . $score[$xname]["Grade"];


?>

