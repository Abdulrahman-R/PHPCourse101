

<form action ="lesson6Forms.php" method= "GET" >
 FName: <input type="text" name="fname" >
 <br>
 LName: <input type="text" name="Lname" >
 <br>
 <input type="submit">
</form>

<?php //forms

echo $_REQUEST['fname'];
echo "<br>";
echo $_REQUEST['Lname'];


/*
 الفرق بين ال getو post
 get تظهر المعلومات على شريط المهام
post لاتظهر المعلومات على شريط المهام وتستخدم للمعلومات الحساسة
Request implements both get and post
*/
?>