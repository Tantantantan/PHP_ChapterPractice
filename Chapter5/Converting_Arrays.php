<html>
<title>Converting</title>
<h2>Using extract()</h2>
<body>
	<?php
	##an example of extract() use to convert arrays to varibles.
	$subjects = array("trigo" 	=> "Algebra",
					  "chem"   	=> "Science",
					  "phy"    	=> "Chemistry",
					  "hum"		=> "English",
					  );

	extract($subjects, EXTR_PREFIX_ALL, "courses");
	echo "this are first year preq: $courses_trigo , 
	$courses_chem , $courses_phy and $courses_hum";
	?>
<hr></hr>
<h2>Using compact()</h2>
	<?php
	##an exmaple of compact() use to convert variables to arrays.
	$sname = "MAGAY";
	$fname = "JONATHAN";
	$mname = "MITRA";

	$name = compact("sname","fname","mname");
	print_r($name);
	?>
	
</body>
</html>