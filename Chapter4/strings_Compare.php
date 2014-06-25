<html>
<title>Compare Strings</title>
<form action = "<?php $_SERVER["PHP_SELF"];?>" method = "POST"><pre>
	Enter first string:  <input type = "text" name = "1ststr">
	Enter second string: <input type = "text" name = "2ndstr">
	<input type = "submit" value = "COMPARE">
</pre></form>
<hr></hr>
<body>
<?php
	$str1 = $_POST["1ststr"];
	$str2 = $_POST["2ndstr"];

	if (strcmp($str1,$str2)==0)
	{
		echo "<br> strings are the same </br>";
	}
	else{
		echo "<br> strings are not the same </br>";
	}
?>
</body>
</html>