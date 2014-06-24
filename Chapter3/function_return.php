<html>
<title>FuncReturn</title>
<body>
<form action="function_return.php" method="post">
<pre>
SURNAME: 	<input type = "text" name ="surname"><br />
FIRSTNAME: 	<input type = "text" name ="firstname"><br />
ID: 		<input type = "number" name ="ID"><br />
<input type="submit" value = "enter">
</pre><hr></hr>
</form>

<?php

$sname = $_POST["surname"];
$fname = $_POST["firstname"];
$ID = $_POST["ID"];

function who ($sname,$fname,$ID){					##function declaration.
return $sname." ".$fname." ".$ID;					##return value.
}

echo who($sname,$fname,$ID);						##function call.
	
?>
</body>
</html>