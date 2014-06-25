<html>
<title>Multidimensional Arrays</title>
<h2>Multidimensional Array</h2>
<body>
<?php
	##an example of a Multidimensional Array.
	$name [0][0] = "Jonathan";
	$name [0][1] = "Mitra";
	$name [1][0] = "Magay";
	$name [1][1] = "Gorospe";

	echo "This are the inputs of 
	Multidimensional Array: <br/>";
	
	print_r($name);
	print ("<br>Outputs are: </br>");

	##to output this array inputs, we will use double for loop.
	for ($i=0;$i<=1;$i++){
	for ($j=0;$j<=1;$j++){
		echo $name[$i][$j],",";
	}
	}
?>
<hr></hr>
<h2>Using list()</h2>
<?php
	#to copy the list of arrays to their variables use list().
	$NAMES = array( "Jonathan" , "Mitra", "Magay");
	#getting the inputs and store.
	list($fname, $mname, $sname ) = $NAMES;						
	echo "INPUTS ARE: <br />";
	print_r($NAMES);
	echo "<br>OUTPUTS ARE: </br>",$fname," ",$mname," ",$sname;

	##sorting multiple arrays 
?>
<hr></hr>
</body>
</html>