<html>
<title>datatpes</title>
<body>
<?php
$intnum = 1;											##assign integer value equal to 1.
$floatnum = 1E3;										##assign 1 raise to 3.
$str="<H1>Hello World!!</H1>";							##assign string input "hello world".
echo "this is an integer number ".$intnum."<br />";
echo "this is floating point number".$floatnum."<br />";
echo "this\tis\ta\tstring\n<br /> $str";				##escape sequence from bash scripting was used here.
echo "<br /><br /> 
	  booleans are used below with a condition if<br />\$integer > 
\$floatnumnd returns true otherwise false<br />";

if ($intnum >= $floatnum)								##with a boolean expression of greater than and equal to.
    {
		echo "true";
	}
else{
		echo "<H3><br>false</br></H3>";
}

echo "<br>ARRAYS</br>";
$names = array("jonathan ","tan ","Than ",				##list of arrays used.
				"Jon ","Magay ","Mitra ");				##whitespaces in array declaration.
echo $names[0];											
echo $names[1];											
echo $names[2];
echo $names[3];
echo $names[4];
echo $names[5];

?>
</body>
</html>