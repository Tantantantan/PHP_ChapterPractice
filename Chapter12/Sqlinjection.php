<?php
/*Safeguarding your applications against SQL injection 
is primarily accomplished by escaping output:*/

/*mysql_real_escape_string Escapes special characters in 
a string for use in an SQL statement*/

$mysql = array();
$hash  = hash($_POST['password']);
$mysql['username'] = mysql_real_escape_string($clean['username']);
$sql = "SELECT count(*) FROM users
WHERE username = '{$mysql['username']}' AND password = '{$hash}'";
$result = mysql_query($sql);
?>

<?php
//The best protection against SQL injection is the use of bound parameters. 
$sql = $db->prepare("SELECT count(*) FROM users
WHERE username = :username AND password = :hash");
$sql->bindParam(":username", $clean['username'], PDO::PARAM_STRING, 32);
$sql->bindParam(":hash", hash($_POST['password']), PDO::PARAM_STRING, 32);

?>