<!DOCTYPE html>
<html>
<body>
<?php
$t=date("H");
echo "<p>The Hour (of the server) is " .$t;
echo ", and will give the following message:</p>";
if($t<"10"){
    echo "Have a good morning!";
}
else if($t<"20"){
    echo "Have a good day!";
}
else{
    echo "Have a good night!";
}
?>
</body>
</html>