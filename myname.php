<?php

class Myname{
	
	public $fullname="Tanvir Rumman <br>";

	private $key;

		public function setkey($key)
		{			
			if ($key > 30)
			{
				$this->key= $key;
			}
		}

		public function getkey()
		{
			echo "The key value is " . $this->key;
		}

		//Construstor
		public function __construct(){
			echo "Welcome ". $this->fullname;
		}


}


?>