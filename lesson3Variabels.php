<?php //variables

$title = "variable lesson"; //string
$num = 80;
$flaot = 3.14;
$bool = true;
$bool2 = false;
$nothing = NULL;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title  . " Home Page" ?></title>
</head>
<body>
    <?php  
    echo "<h1>let's take $title</h1>";
    echo "$num \n" ;
    echo $flaot;
    echo $bool;
    echo $bool2;
    echo $nothing;
    
    ?>

</body>
</html>