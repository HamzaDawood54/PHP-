<!DOCTYPE html>
<html>
<body>
<?php declare(strict_types=1);       //strict requirement
function addNumbers(int $a, int $b){
    return $a+$b;
}
addNumbers(5, "5 days");
//since strict is enabled and "5 days" is not an integer, an error will be thrown
?>
</body>
</html>