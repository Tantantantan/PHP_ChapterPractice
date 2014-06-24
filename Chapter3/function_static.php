<html>
<head></head>
<body>
<form action="staticfunction.php" method="post">
Enter max number: <input type = "number" name ="number"><br />
<input type="submit" value = "enter">
</form>

<?php
$num = $_POST["number"];

function number() {

  static $num=0;
  return $num+=2;
}

print "Will print max number of inputs by 2: ";
for($i=1;$i<=$num;$i++){
 
  print number().",";
}
?>

</body>
</html>
