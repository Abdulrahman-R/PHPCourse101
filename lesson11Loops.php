

<?php
    //Loops
    for ( $i = 0; $i <= 5 ; $i++){
        echo $i + 10 . "<br>";
    }
    
    $family = ["Father","Mother","Son"];

    /*
    //for loop
    for($i = 0; $i < count($family);$i++){
        echo $family[$i] . "<br>";
    }
    */

    //while loop
    /*
    $i = 0;
    while ($i < count($family)) {
        echo $family[$i] . "<br>";
        $i++;
      }
    */

    //do-while loop
    /*
    $i = 0;
    do {
        echo $family[$i] . "<br>";
        $i++;
      } while ($i < count($family));
      */

      //foreach
      foreach ($family as $value) {
        echo "$value <br>";
      }

?>
