<html>
<head><title>Personality</title></head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
Select your mood:<br />

<select name=	"attributes[]" multiple>
<option value=	"Perky"   >Perky   	    </option>
<option value=	"Morose"  >Morose  	    </option>
<option value=	"Thinking">Thinking	    </option>
<option value=	"Feeling" >Feeling 	    </option>
<option value=	"Thrifty" >Spend-thrift </option>
<option value=	"Shopper" >Shopper		</option>
</select><br />
<input type="submit" name="s" value="Record my personality!" />
</form>

<?php
	/*since the output is an array we can also use
	 for each loop to traverse it*/
	
	$variable = $_GET["attributes"];
	foreach ($variable as $key => $value) {		
		echo $value;															
	}

?>
</body>
</html>
