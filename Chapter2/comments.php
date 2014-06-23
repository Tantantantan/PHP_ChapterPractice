<html>
<head>
<title>Comments</title>
</head>
<body>
<form action=basics.php method="post">
	Enter a number: <input type="number" name="number">
	<input type="submit" value="ENTER"><br />
</form>
<?php
//program that will do the basics (C style comment).
if (!empty($_POST["number"])){							##checks if the number is entered. (shell style comments)
	$number = $_POST["number"];							##assign input value to variable name "number".
	echo "your input number is: ".{$number}."<br />";	##concatenated string and a variable containing numbers.
/*
else {
	print "comments can be use to temporarily disable statements or for debugging" (C style multi line comment)
}
*/
?>
</body>
</html>