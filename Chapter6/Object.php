<html>
<title>Object</title>
<body>
	<?php
		class MyClass
		{
			##class methods and properties go here
			public $prop1 = "Hello Properties"; 

			public function setProperty($newal)
			{
				$this->prop1 = $newal;
			}

			public function getProperty()
			{
				return $this->prop1 . "<br/>";
			}

		}
		$obj = new MyClass;
		echo $obj->getProperty();   				 	 ##Get the property value.
		$obj -> setProperty("New Hello Properties");	 ##Set a value of property.
		echo $obj->getProperty();						 ##show the new changes.

		$obj2 = new MyClass;							 ##Created second object.
		$obj2 -> setProperty("New 2nd Hello Properties");
		echo $obj2->getProperty();						 ##show the changes.
	?>
</body>
</html>