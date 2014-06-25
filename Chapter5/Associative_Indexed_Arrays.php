<html>
<title></title>
<body>
<h2>Index Arrays</h2>
<?php
	
	##an example of an Indexed Array.
	$name[0] = "Jonathan";
	$name[1] = "Thantan";
	$name[3] = "Tan";
	$name[4] = "Rizza";

	print_r($name);
	echo "<br/>","OUTPUT ARE: ";

	for($i=0; $i<=4; $i++){
		echo $name[$i]," ";
	}
	##slicing an Array
	echo "<br />SLICED IN 2x2: ";
	$sliced = array_slice($name, 2,2);
	print_r($sliced);
	
	##slice and chunk
	echo "<br />SLICED IN 2x2: ";
	$chunk = array_chunk($name, 2,2);
	print_r($chunk);
?>
<hr></hr>
<h2>Associative Arrays</h2>
<?php

	##an example of an Associative Array.
	$carowners = array( "Jonathan" =>  "Ferrari" ,
						"Romz"     =>  "BMW"	 ,
						"Tan"	   =>  "Nissan"	 ,
						"Magay"	   =>  "Mazda"	 ,
		);
	print_r($carowners);
	echo "<br/><br>OUTPUT USING THEIR KEYS: ";
	echo $carowners["Jonathan"]	," ";
	echo $carowners["Romz"]		," ";
	echo $carowners["Tan"]		," ";
	echo $carowners["Magay"]	," ";
	
	##getting the size of an array inputs.
	echo "<br /> NUMBER OF INPUTS: ";
	echo count($carowners);
	
	##determining the keys and values.
	echo "<br />Keys of arrays are: ";
	print_r(array_keys($carowners));
	echo "<br/>Values of arrays are: ";
	print_r(array_values($carowners));

	##checking if exists.
	if (array_key_exists("Jonathan", $carowners)) {
	echo "<br/> key jonathan exists!\n";
	}
?>
<hr></hr>
<h2>Adding Inputs in Arrays</h2>
<form action = "<?php $_SERVER["PHP_SELF"];?>" method = "POST">
	ENTER A NUMBER: <input type = "number" name = "input">
	<input type = "submit" value = "ENTER">
</form>
<?php
	if(!empty($_POST["input"]))
	{
		$number[] = $_POST["input"];
		echo "ARRAY INPUT IS: ",
		$number[0];
	}

?>
<hr></hr>
<h2>removing inserting elements</h2>
<?php
	$elements = array("1","2","3","4","5");
	print ("remove the 3 and 4 : ");
	print_r(array_splice($elements, 2,2));

	##count the sum of arrays
	$total = array_sum($elements);
	echo "<br/>sum of all elements: ",$total; 
?>
</body>
</html>