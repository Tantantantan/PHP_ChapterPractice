<html>
<title>Inheritance</title>
<body>
<?php
	class MyClass
		{
			public function __construct()
		  {
		  	  ##__CLASS__ returns the name of the class used.
		      echo 'The class "', __CLASS__, '" was initiated!<br />';	
		  }
			public $prop1 = "Hello Properties"; 

			public function setProperty($neval)
			{
				$this->prop1 = $neval;
			}

			public function getProperty()
			{
				return $this->prop1 . "<br/>";
			}

		}

	$obj = new MyClass;
	echo $obj->getProperty();
	$obj -> setProperty("Hello Properties 2");
	echo $obj -> getProperty();

##########################################################################
//creating another class to extend from the primary class.///////////////
	
	class MyClass2 extends MyClass
		{
			public function __construct()
  			{
  			/*inherited method __construct,parent keyword with the scope 
  			resolution operator (::):*/
      		parent::__construct();
 			}

	  		public function newMethod()
	  		{
	      	echo "From a new method in " . __CLASS__ . ".<br />";
	  		}
		}

	$obj2 = new MyClass2;
	echo $obj2 -> newMethod();
?>
</body>
</html>