<!DOCTYPE html>
<html>
<body>
<?php
$x=5;
$y=10;
var_dump($x<=>$y);          //Returns -1 because $x is less than $y
echo "<br>";
$x=10;
$y=10;
var_dump($x<=>$y);        //Returns 0 because values are equal
echo "<br>";
$x=15;
$y=10;
var_dump($x<=>$y);       //Returns +1 because $x is greater than $y
?>
</body>
</html>