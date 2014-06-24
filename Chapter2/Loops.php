<html>
<body>
<form action = "<?php $_SERVER['PHP_SELF'];?>" method = "POST">
<h6>Enter number of loops: <input type = "number" name = "numloops"></h6>

<hr></hr>
<div align="center"><h3>FOR LOOP</h3></div>

<?php
$num = $_POST['numloops'];
for ((int)$i=1; $i<=$num; $i++){
	echo "$i</br>";
}
?>

<hr></hr>
<div align="center"><h3>WHILE LOOP</h3></div>

<?php
$j=1;
while ($j<=$num){
	echo $j++,"<br/>";
}
?>

<hr></hr>
<div align="center"><h3>DO WHILE LOOP</h3></div>
<?php
$k=1;
do {
echo $k++,"<br/>";
}while ($k<=$num);
?>
</form>
</body>
</html>