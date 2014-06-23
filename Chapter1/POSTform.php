<html>
<head>
<title>Form</title>
</head>
<body>
<form action=POSTform.php method="post">
	Enter your name: <input type="text" name="name"><br />
	Enter your age: <input type="number" name="age"><br />
	Select Gender: <input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male<br />
	<input type="submit" value="ENTER"><br />
</form>
<?php
if (!empty($_POST["name"]))
{
	echo $name=$_POST["name"]."<br />";
	echo $age=$_POST["age"]."<br />";
	echo $gender=$_POST["gender"]."<br />";
}

else{
	echo "Name is required \n";
}
?>
</body>
</html>
