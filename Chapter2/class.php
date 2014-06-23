<html>
<title>class</title>
<body>
<?php
class Person(){
	public $name = '';

	function name ($newname = NULL){
		if (!is_null($newname)) {
			$this->name = $newname;
		}
		return $this->name; 
	}
}

$name2 = new Person;
$name2->name('Jonathan');
echo "Hello, ".$name2->name;
?>
</body>
</html>