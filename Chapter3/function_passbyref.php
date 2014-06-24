<html>
<title>GlobalFunction</title>
<body>
<?php
$X=10;

function ref(&$x){
	$y = $x;
	return $y;
}

echo ref($X);								

?>

</body>
</html>