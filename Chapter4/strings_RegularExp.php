<html>
<title>Regular Expressions</title>
<body>
<h2>Regular Expressions</h2>
<?php
	echo "String used is:",
	$string1 = " Jonathan Magay<br />";
	$string2 = "find word Jonathan above: ";
	//an example of using dot
	if (preg_match("/J.n.t.a./", $string1) == true)
	{
		echo $string2 .= "match found<br />";
	}
	else 
	{
		echo $string2 .= "no match found<br />";
	}
	//an example of using ^
	$string3 = "find in the string that contains word Jon: ";
	if (preg_match("/^Jon/", "Jonathan") == true)					##bug when using $string1 variable.
	{
		echo $string3 .= "match found<br />";
	}
	else 
	{
		echo $string3 .= "no match found<br />";
	}
	//an example of using $
	$string4 = "find in the string that contain word Magay: ";
	if (preg_match("/Magay$/", "Jonathan Magay") == true)			##bug when using $string1 variable.
	{
		echo $string4 .= "match found<br />";
	}
	else 
	{
		echo $string4 .= "no match found<br />";
	}
?>
<hr></hr>
<h2>Using Character Classes</h2>
<?php
	##an example of brackets
	if (preg_match("/b[aeiou]c/", "bic") == true){
		echo "true<br/>";
	}
	else {
		echo "false<br/>";
	}
	##an example of negate ^ in brackets
	if (preg_match("/[^aeiou]/", "b") == true){
		echo "true<br/>";
	}
	else {
		echo "false<br/>";
	}
	##an example of brackets with dash for range
	if (preg_match("/[a-zA-Z]/", "b") == true){
		echo "true<br/>";
	}
	else {
		echo "false<br/>";
	}
	##an example of alternative | or OR
	if (preg_match("/a|b/", "b") == true){
		echo "true<br/>";
	}
	else {
		echo "false<br/>";
	}
?>
<hr></hr>
<h2>Repeating Sequences</h2>
<?php
	if (preg_match("/WO+T!/", "WWWWWWOOOOOOOOOOOT!!!") == true){
		echo "true<br/>";
	}
	else {
		echo "false<br/>";
	}

	if (preg_match("/WO+T!!?/", "WWWWWWOOOOOOOOOOOT!!!") == true){
		echo "true<br/>";
	}
	else {
		echo "false<br/>";
	}

	if (preg_match("/!*$/", "WWWWWWOOOOOOOOOOOT!!!") == true){
		echo "true<br/>";
	}
	else {
		echo "false<br/>";
	}
?>
</body>
</html>