<html>
<title>SQL access</title>
<body>
<?php
$db = new PDO("mysql:host=localhost;dbname=tan2", "root", "klabklab");
#############################################################################
$statement = $db->prepare( "SELECT * FROM mix");
$statement->execute();
// gets rows one at a time
while ($row = $statement->fetch()) {
print_r($row);
// or do something more meaningful with each returned row
}
$statement = null;
?>
</body>
</html>