<?php
 /**
  * 
  */
 class wifi
 {
 	public $brand;
 	public $name;
 	
 	function __construct($brand,$name)
 	{
 		$this->brand=$brand;
 		$this->name=$name;
 	}

 	public function pr()
 	{
 		echo "my wifi is {$this->brand} {$this->name}";
 	}

 }



 class mywifi extends wifi
 {
 	
 	public function second()
 	{
 		echo "my {$this->brand} {$this->name} is good ";
 	}
}

  $obj= new mywifi("Dialog","LTG");
  $obj->pr();
  echo"<br>";
  $obj->second();





?>