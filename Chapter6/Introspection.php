<html>
<title>Object</title>
<body>
	<?php
		class MyClass
		{
			##class methods and properties go here
			public $prop1 = "Hello Properties";
			 
			public function __construct()
		  	{
		  	  ##__CLASS__ returns the name of the class used.
		      echo 'The class "', __CLASS__, '" was initiated!<br />';	
		  	}
			public function setProperty($neval)
			{
				$this->prop1 = $neval;
			}

			public function getProperty()
			{
				return $this->prop1 . "<br/>";
			}
		}

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
	?>
<h2>Using class_exists</h2>
	<?php		
			if (class_exists('MyClass') == true) {
    		print ("true");
			}
	?>
<hr></hr>
<h2>Using get_class_methods()</h2>
	<?php
			$methods = get_class_methods('MyClass');
			foreach ($methods as $method_name) {
    		echo "$method_name <br/>";
			}
	?>
<hr></hr>
<h2>Using get_class_vars()</h2>
	<?php
			$vars = get_class_vars('MyClass');
			foreach ($vars as $variables) {
    		echo "$variables <br/>";
			}
	?>
<hr></hr>
<h2>Using get_parent_class()</h2>
	<?php
			echo get_parent_class('MyClass2');
	?>
</body>
</html>