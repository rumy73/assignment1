<?php 

class keyvalue
{
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

}



?>
