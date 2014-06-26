<html>
<title>Sorting Arrays</title>
<h2>Sorting Arrays</h2><hr></hr>
<h3>using ksort()</h3>
<body>
	<?php
		$names = array( 	    "Jonathan" => "Magay"	,
				 	    "Rizza"    => "Gorospe"  	,
				 	    "Philipp"  => "Lam"		,
				 	    "Romz"     => "Vargaz"  	,
				 	    "Gerald"   => "Gono"	, 
					);
################################################################################
	ksort($names);							
	foreach ($names as $key => $val) {
		echo "$key => $val <br/>";
	}
	?>	
<hr></hr>
<h3>using krsort()</h3>
	<?php
	krsort($names);
	foreach ($names as $key => $val) {
		echo "$key => $val <br/>";
	}
	?>
<hr></hr>
<h3>using asort()</h3>
	<?php
	asort($names);
	foreach ($names as $key => $val) {
		echo "$key => $val <br/>";
	}
	?>
<hr></hr>
<h3>using arsort()</h3>
	<?php
	arsort($names);
	foreach ($names as $key => $val) {
		echo "$key => $val <br/>";
	}
	?>
<hr></hr>
<h3>using sort()</h3>	
	<?php
	sort($names);
	foreach ($names as $key => $val) {
		echo "$key => $val <br/>";
	}
	?>
<hr></hr>
<h3>using array_multisort</h3>
<?php
	$NAMES = array( "Jonathan" , "Mitra", "Magay");
	$ID	   = array( "123"	   , "56"   , "56"  );
	$CODE  = array( "A"        , "B"    , "C"    );

	array_multisort($NAMES, SORT_ASC, $ID, SORT_DESC, $CODE, SORT_ASC);

	for ($i = 0; $i < count($NAMES); $i++) {
	printf("{$NAMES[$i]}, {$ID[$i]}, {$CODE[$i]}<br/>");
	}
?>
<hr></hr>
<h3>Merging Arrays</h3>
<?php
	## Merging arrays
	$merged = array_merge($NAMES, $ID);
	foreach ($merged as $key => $val){
		echo "$key => $val <br/>";
	}
	## Unique
	$unique = array_unique($merged);
	print_r($unique);
?>		
</body>
</html>
