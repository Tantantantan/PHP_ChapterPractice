<html>
<title>Switch</title>
<body>
<form action="<?php $_SERVER["PHP_SELF"];?>" method = "POST">
<pre>
	Enter your choice:
		1.Bitwise and Logical examples
		2.variables examples
		3.Loops examples
		4.Class examples
		5.Operators examples

	<input type="number" name="choice">
	<input type="submit" value="submit">
</pre>
</form>
<hr></hr>
<?php
$choice = $_POST["choice"];
switch ($choice){

	case 1:
	include "/var/www/Chapter2/BitwiseAndLogical.php"; 
	break;
 
	case 2:
	include "/var/www/Chapter2/variables.php"; 
	break;


	case 3:
	include "/var/www/Chapter2/Operators.php"; 
	break;

	case 4:
	include "/var/www/Chapter2/Loops.php"; 
	break;

	case 5:
	include "/var/www/Chapter2/Operators.php"; 
	break;

}
?>
</body>
</html>