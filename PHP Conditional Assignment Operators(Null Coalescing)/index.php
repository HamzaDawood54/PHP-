<!DOCTYPE html>
<html>
<body>
<?php
// variable $user is the value of $_GET['user']
// and "anonymous" if it does not exist
echo $user=$_GET['user']??"anonymous";
echo "<br>";
//varible $color is "red"  if $color does not exist or is Null
echo $color=$color??"red";
?>
</body>
</html>