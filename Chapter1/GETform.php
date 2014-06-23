<html>
<head>
<title>Form</title>
</head>
<body>
<form action=GETform.php method="GET">
	Enter your email: <input type="text" name="email"><br />
	<input type="submit" value="ENTER"><br />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="GET")
{
	echo $email=$_GET["email"]."<br />";
}
?>
</body>
</html>
