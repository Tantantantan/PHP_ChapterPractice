<html>
<title>filtering</title>
<body>
<form action="process.php" method="POST">
<p>Please select a color:
	<select name="color">
		<option value="red"  > red  </option>
		<option value="green"> green</option>
		<option value="blue" > blue </option>
	</select>
<input type="submit" /></p>
</form>

<?
/*This example demonstrates a simple naming convention. 
You initialize an array called $clean. For each input 
field, validate the input and store the validated input 
into the array. */

$clean = array();
switch($_POST["color"]) 
{
	case "red"  : //null
	case "green": //null
	case "blue" :

	$clean['color'] = $_POST['color'];
	break;

	default:
	/* ERROR */
	break;
}

/*other alternative functions that can do filtering are: 
ctype_alnum() use to scan if it contains digit and characters only.
preg_match('pattern',variable) use to scan desired patterns only.
*/

?>
</body>
</html>