<html>
<title>GlobalFunction</title>
<body>

<?php
$X=10;
$Y=20;

function variable($x,$y){
	global $z;							##declare $z as a global variable.
	$z = $x + $y;
}

variable ($X,$Y);
echo $z;								##outside of the function but $z is still accessible.

?>

</body>
</html>