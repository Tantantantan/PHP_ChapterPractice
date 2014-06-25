<html>
<title>Array Traversing</title>
<h2>TRAVERSING ARRAYS</h2>
<body>
<?php
	$names = array("Romz","Keith","Lemuel","Tan","Gerald","Kaye");
	foreach($names as $tc){
		echo "Jr. Software Engineer $tc <br/>";
	}
?>
<hr></hr>
<h3>Random Order</h3>
<?php
	shuffle($names);
	foreach ($names as $key => $val) {
		echo "$key => $val <br/>";
	}
?>
<hr></hr>
<h3>Reverse Array</h3>
<?php
$reversed = array_reverse($names);
		foreach ($reversed as $key => $val) {
		echo "$key => $val <br/>";
	}
?>

</body>
</html>