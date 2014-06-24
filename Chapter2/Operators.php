<html>
<title>Operators</title>
<body>

<?php

	$num1 = $_POST['1stnum'];
	$num2 = $_POST['2ndnum'];
	echo "<pre>inputs are $num1 and $num2 </pre><br />";

	if ($num1 == $num2){
	echo "<pre> This is equality (==) ? : yes</pre><br />";
	}
	else{
	echo "<pre> This is equality (==) ? : no</pre><br />"; 
	}
	if ($num1 === $num2){
	echo "<pre> This is identity (===) ? : yes</pre><br />";
	}
	else{
	echo "<pre> This is identity (===) ? : no </pre><br />";	
	}
	if ($num1 !== $num2){
	echo "<pre> This is inequality (!==)? : yes </pre><br />";
	}
	else{
	echo "<pre> This is inequality (!==)? : no </pre><br />";	
	}
	if ($num1 > $num2){
	echo "<pre> This is greater than (>) ? : yes</pre><br />";
    }
    else{
    echo "<pre> This is greater than (>) ? : no</pre><br />";
	}
	if ($num1 < $num2){
	echo "<pre> This is less than (<) ? : yes</pre><br />";
	}
	else{
	echo "<pre> This is less than (<) ? : no</pre><br />";	
	}
?>

<form action = "<?php $_SERVER['PHP_SELF'];?>" method = "POST"> 
<pre>	
	Enter first number:  <input type = "number" name = "1stnum"><br />
	Enter second number: <input type = "number" name = "2ndnum"><br />
	<input type = "submit" value = "Enter">
</pre>
</form>
</body>
</html>