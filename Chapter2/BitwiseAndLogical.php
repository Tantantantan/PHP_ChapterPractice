<html>
<title>Operators</title>
<body>

<form action = "BitwiseAndLogical" method = "POST"> 
<pre>	
	Enter first number:         <input type = "number" name = "1stnum"><br />
	Enter second number:        <input type = "number" name = "2ndnum"><br />
	Enter the number of shifts: <input type = "number" = "3rdnum"><br />
	<input type = "submit" value = "Enter">
</pre>

<hr></hr>
<div align="center"><h3>BITWISE OPERATORS</h3></div>
<?php
	$num1 = $_POST['1stnum'];
	$num2 = $_POST['2ndnum'];
	$num3 = $_POST['3rdnum'];
	echo "<br>inputs are : $num1 and $num2 </br>";
	echo "<br>binary value of inputs are: ", $bin1 = decbin($num1), " and ",$bin2 = decbin($num2), "</br>";
	echo "<br>OR of the input values are: ", $bin1|$bin2 , "</br>";
	echo "<br>AND of the input values are: ", $bin1&$bin2 , "</br>";
	echo "<br>shift right of the input values are: ", $bin1>>$num3 , "</br>";
	echo "<br>shift left of the input values are: ", $bin1<<$num3 , "</br>";
?>

<hr></hr>
<div align="center"><h3>LOGICAL OPERATORS</h3></div>
<?php
	if ($num1&&$num2==1){
	echo "<br>if first num AND second num is equal to 1 display true else false: TRUE</br>";
	}
	else {
	echo "<br>if first num AND second num is equal to 1 display true else false: FALSE</br>";	
	}
	if ($num1||$num2==1){
	echo "<br>if first num OR second num is equal to 1 display true else false: TRUE</br>";
	}
	else{
	echo "<br>if first num OR second num is equal to 1 display true else false: FALSE</br>";	
	}
	if ($num1 XOR $num2==1){
	echo "<br>if first num XOR second num is equal to 1 display true else false: TRUE</br>";
	}
	else{
	echo "<br>if first num XOR second num is equal to 1 display true else false: FALSE</br>";	
	}
?>
</form>
</body>
</html>