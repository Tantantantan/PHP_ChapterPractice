<html>
<title>Server Info</title>
<body>

	<form action "<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "GET">
	<div align = "left">
	ENTER YOUR NAME:	<input type = "text" name = "name"></div>
	<div align = "left">
	ENTER YOUR NICKNAME:<input type = "text" name = "nickname"></div>	
	<div align = "left">
	GENDER:				<input type = "radio"name = "gender" value = "Male"> Male
						<input type = "radio"name = "gender" value = "Female"> Female</div>
	<div align = "left">
						<input type = "submit" value ="Submit"></div>
	</form>
	<hr></hr>
	<?php
	###################################################################################
	//if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	echo "<br/>",$_GET["name"];
	echo "<br/>",$_GET["nickname"];
	echo "<br/>",$_GET["gender"];
	?>
</body>
</html>