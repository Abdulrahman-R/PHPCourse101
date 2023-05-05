

<?php
    //function
    function hello(){
        $user = "Abdulrahman";
        if($user === "Abdulrahman"){
             echo "Hello " . $user;
        }else{
             echo "Bye " . $user;
        }     

    }
   
    hello();
    echo "<br>";

    //function with parameter
    function CheckUser($name){
        $user = $name;
        if($user === "Abdulrahman"){
             echo "Hello " . $user;
        }else{
             echo "Bye " . $user;
        }     

    }

    CheckUser("Ahemd");
    echo "<br>";
    CheckUser("Abdulrahman");

    //function with return value
    function add($x, $y){
        return $x + $y;
    }
    echo "<br>";
    echo add(4,4);
   
?>
