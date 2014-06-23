<html>
<title>variables</title>
<body>
<?php
echo "<h1>Variable variable</h1>";
echo "this program will output the value of \$variable which is equal tan and \$\$variable which magay<br />";

$name="tan";			##assign $name equal to string "tan"
$$name="magay";			##asssign $tan equal to string "magay"
echo "$name <br />";	
echo "$tan <br />";

echo "<hr> </hr>";
echo "<h1>Variable references</h1>";
echo "=& is use for aliasing and .= is for concatenate the output <br />";
$name =& $pangalan; 	##means aliasing $name is equal to $pangalan.
$name = "jonathan";

echo "$name <br />";
echo "$pangalan <br />";

echo "<hr></hr>";
echo "<h1>Local scope</h1>";
function counter(){
	$counter=10;		##inside local scope of function counter.
	echo $counter;
}
counter();				##call the function couter.
$counter=20;			##declare a cariable counter.
echo "<br />$counter";	##display the value of variable $counter	.

echo "<hr></hr>";
echo "<h1>Global scope</h1>";

function number(){
	global $number;		##declared that $number = 10 is a global.
	$number = 10;
}
number();				##since it is global no need to return the value of $number.
echo $number;

echo "<hr></hr>";
echo "<h1>Static Scope</h1>";

function counts()
{
static $counter = 0;
$counter++;
echo $counter;
}

echo counts();
echo counts();

?>
</body>
</html>