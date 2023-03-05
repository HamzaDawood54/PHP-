<!DOCTYPE html>
<html>
<body>
<?php
function addNumbers(int $a, int $b){
    return $a+$b;
}
addNumbers(5, "5 days");
//since strict is NOT declared, "5 days" is changed to int(5), and it will return 10
?>
</body>
</html>