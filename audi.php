<?php

include 'car.php'; 

class Audi extends Car{

	public function getColor(){
		echo $this->Color;
	}

		public function getAEngnine(){
		echo $this->AEngnine;
	}

			public function getBreak(){
		echo $this->Break;
	}

			public function getSeat(){
		echo $this->Seat;
	}
}



?>