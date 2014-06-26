<html>
<title></title>
<body>
<?php
$db = new PDO("mysql:host=localhost;dbname=tan2", "root", "klabklab");
#############################################################################
$statement = $db->prepare( "SELECT * FROM mix");
$statement->execute();

echo "<table border='1'>
<tr>
<th>ID</th>
<th>status</th>
<th>first</th>
<th>last</th>
<th>position</th>
</tr>";

while ($row = $statement->fetch()){
	echo "<tr>";
  	echo "<td>" , $row['ID'] 	   , "</td>";
  	echo "<td>" , $row['status']   , "</td>";
  	echo "<td>" , $row['first']    , "</td>";
  	echo "<td>" , $row['last'] 	   , "</td>";
  	echo "<td>" , $row['position'] , "</td>";
  	echo "</tr>";
}
echo "</table>";
?>
<hr></hr>
<?php
$statement2 = $db->prepare( "SELECT * FROM tantan2");
$statement2->execute();

echo "<table border='1'>
<tr>
<th>first</th>
<th>last</th>
<th>position</th>
<th>age</th>
<th>register</th>
<th>bonus</th>
</tr>";

while ($row = $statement2->fetch()){
	echo "<tr>";
  	echo "<td>" , $row['first']  	, "</td>";
  	echo "<td>" , $row['last']   	, "</td>";
  	echo "<td>" , $row['position']  , "</td>";
  	echo "<td>" , $row['age'] 	    , "</td>";
  	echo "<td>" , $row['register']  , "</td>";
  	echo "<td>" , $row['bonus'] 	, "</td>";
  	echo "</tr>";
}
echo "</table>";
?>
