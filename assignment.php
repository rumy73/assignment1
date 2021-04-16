<?php

class Assignment{

	public $Txt = "ADVANCED WEB APPLICATION DEVELOPMENT";

	public function wordcount($Txt){
		echo "Total number of word in sentace are: ". str_word_count($Txt);

	}


	public function smallword($txt){
		$string = $txt;
		$word = "";  
		$words = array();  
   
		//Add extra space 
		$string = $string . " ";  
   
		for($i = 0; $i < strlen($string); $i++){  
		    //Split the string into words  
		    if($string[$i] != ' '){  
		        $word = $word . $string[$i];  
		    }  
		    else{  
		        //Add word to string array words  
		        array_push($words, $word);  
		        //Make word an empty string  
		        $word = "";  
		    }  
		}  
		   
			//Initialize small 
			$small = $large = $words[0];  
		   
			//Determine smallest 
			for($k = 0; $k < count($words); $k++){  
		       
		    if(strlen($small) > strlen($words[$k]))  
		        $small = $words[$k];  
		   
		    if(strlen($large) < strlen($words[$k]))  
		        $large = $words[$k];  
			}  
		   
				print("Smallest word: " . $small);  

		}


			public function ReplaceWd($Txt){
				echo str_replace("WEB APPLICATION", "WEBSITE", $Txt);

			}


}





?>