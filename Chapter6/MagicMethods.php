<html>
<title>Magic Method</title>
<h2>using __construct() and __destruct()</h2>
<body>
	<?php
		class MyClass
		{
		  public $prop1 = "Hello Property!";
		  ##contruct() is used to automatically output the method when object was instantiate.
		  public function __construct()
		  {
		  	  ##__CLASS__ returns the name of the class used.
		      echo 'The class "', __CLASS__, '" was initiated!<br />';	
		  }
		  ##destruct was used to call functions that are not used.
		  public function __destruct()
  		  {
      		  echo 'The class "', __CLASS__, '" was destroyed.<br />';
    	  }
		  public function setProperty($newval)
		  {
		      $this->prop1 = $newval;
		  }
		  
		  public function getProperty()
		  {
		      return $this->prop1 . "<br />";
		  }
		}
		 
		// Create a new object
		$obj = new MyClass;
		 
		// Get the value of $prop1
		echo $obj->getProperty();
		 
		// Output a message at the end of the file
		echo "End of file.<br />";
	?>
</body>
</html>