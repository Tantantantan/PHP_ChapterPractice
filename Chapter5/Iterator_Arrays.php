<html>
<title>Iterator Arrays</title>
<h2>Iterator Arrays</h2>
<body>
<?php
$subjects = array("trigo" 	=> "Algebra"  ,
				  "chem"   	=> "Science"  ,
				  "phy"    	=> "Chemistry",
				  "hum"		=> "English"  ,
				 );

print_r(reset($subjects))  ;print " "; 		##reset the iterator of array $subjects.
print_r(current($Iterator));print " ";		##print current iterator.
print_r(next($subjects))   ;print " ";		##point iterator to the n0ext.
print_r(prev($subjects))   ;print " ";		##goes back to prev value.
print_r(end($subjects))	   ;print " ";		##goes to the end of array.
print_r(key($subjects))	   ;print " ";		##print the key of value pointed by the iterator.
#############################################################################################
##example of each() iterator like for loop.
echo "<br/><br/><br/>";
reset($subjects);
while (list($prereq,$subj) = each($subjects)){
	echo "</br>Pre-requisite of $prereq is $subj<br>";
}	
?>
</body>
</html>