<?php

include 'superpower.php'; 

class SuperHero extends SuperPower{

	public function getironman(){
		echo $this->power1;
		echo $this->power2;
		echo $this->power3;
		echo $this->power6;
	}

	public function getThor(){
		echo $this->power1;
		echo $this->power3;
		echo $this->power5;
		echo $this->power7;
	}


	public function getCaptain(){
		echo $this->power4;
		echo $this->power7;
	}
}



?>