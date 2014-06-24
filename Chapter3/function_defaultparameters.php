<html>
<title>Default Parameter</title>
<body>
<div align = "left"><h2>Default Parameter</h2></div>
<hr></hr>
<?php

function variable($x=1){ ##default value of $x is 1. but if there is an input to $x default value is ignored
	return	$x;							
	}

$x=10;
echo variable ($x);		  ##since there is a pass of value = 10. this will be processed instead of 1.

?>

</body>
</html>