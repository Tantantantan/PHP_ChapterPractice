<html>
<title></title>
<body>
<h2>using strlen()</h2>	
<?php
	/*example of strlen()*/
	echo "this is the string<br />";
	echo $string = "to count the string 
	we will use strlen() <br />";
	echo "above string is equal to :",
	strlen($string);
?>
<hr></hr>
<h2>trim(), ltrim(), and rtrim()</h2>
<?php
	/*example of a trim() function */
	echo "trim() returns a copy of string 
	with whitespace removed from the beginning 
	and the end. <br />";
	echo "this is the example string:",$string2 =         
	"string        (many spaces)         <br />";
	echo "the output of above string using trim()
	would be: ", trim($string2);
?>
<br></br>
<?php
	/* example of a ltrim() function */
	echo "ltrim() (the l is for left) does the same, 
	but removes whitespace only from the start of 
	the string.<br/>";
	echo "this is the sample string: ",$string3 = 
	"                 hello string<br />";
	echo "using ltrim(): ",ltrim($string3);
?>
<br></br>
<?php
	/*example of rtrim*/
	echo "rtrim() (the r is for right) removes whitespace 
	only from the end of the string. <br/>";
	echo "this is the example string: ",
	$string4 = "The Quick Brown Fox Jumps Over the Lazy 
	Puppy                                    :)<br/>";
	echo "using rtrim() :",rtrim($string4);
?>
<hr></hr>
<h2>strtolower() and strtoupper() ucfirst() ucwords()</h2>
<?php
	/*example of changing cases*/
	echo $string5 = "example string example string example 
	<br/><br/>";

	echo "##with the use of strtolower()<br/>", strtolower($string5);
	echo "##with the use of strtoupper()<br/>", strtoupper($string5);
	echo "##with the use of ucfirst()<br/>"   , ucfirst($string5)   ;
	echo "##with the use of ucwords()<br/>"   , ucwords($string5)   ; 
?>
<hr></hr>
<h2>using substr()</h2>
<?php
	/*example of substr()*/
	echo "used string for substr(\$string6) is: ",
	$string6 = "HOTDOG<br/>","substr(\$string6,3,3) :";
	echo substr($string6,3,3),"<br/>";

	/*example of substr_count();*/
	echo  "used string substr_count is: ",
	$string7 = "example string example string example 
	<br/>"; 
	$result = substr_count($string7, "example");
	echo "The number of word example on above string is: 
	$result<br />";
?>
<hr></hr>
<h2>using strrev(),str_repeat(),</h2>
<?php
	
	echo "string used: ",$string8 = "HELLO!!!<br/>";
	echo "using str_repeat(string,10): <br/>", 
	str_repeat($string8, 10) ;
	printf ("strrev('abc')");
	echo "<br />",$strrev = (strrev("abc"));
?>
</body>
</html>