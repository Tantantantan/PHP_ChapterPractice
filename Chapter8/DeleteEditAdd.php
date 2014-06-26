<html>
<title></title>
<?php
$db = new PDO("mysql:host=localhost;dbname=tan2","root","klabklab");
$statement = $db->prepare("SELECT * FROM tantan3");
$statement->execute();

echo "<table border = '1'>
	 <tr>
	 <th>ID</th>
	 <th>address</th>
	 </tr>";

	 while ($row = $statement->fetch()){
	 	echo "<tr>";
	 	echo "<td>",$row['ID']	   ,"</td>";
	 	echo "<td>",$row['address'],"</td>";
	 	echo "</tr>";
	 }
echo "</table>";
#############################################Inserting to database.
$statement = $db->prepare("INSERT INTO tantan3 
	(ID,address)". "VALUES (:ID,:address)");

	$statement->execute(array(
	'ID' 		 => "8",
	'address'    => "h",
	));

echo "<table border = '1'>
	 <tr>
	 <th>ID</th>
	 <th>address</th>
	 </tr>";

	 while ($row = $statement->fetch()){
	 	echo "<tr>";
	 	echo "<td>",$row['ID']	   ,"</td>";
	 	echo "<td>",$row['address'],"</td>";
	 	echo "</tr>";
	 }
echo "</table>";
?>
<html>