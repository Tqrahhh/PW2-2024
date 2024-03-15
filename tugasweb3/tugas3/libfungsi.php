<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
*/



	function kelulusan($totalnilai){

		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
		
   
			if($totalnilai > 55){
				return "Lulus";
			}

			elseif($totalnilai < 55){
				return "Tidak Lulus";
			}
	}
	
	function grade($totalnilai){
		
		  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/ 

   
			if($totalnilai <= 100){
				return "A";
			}

			elseif($totalnilai <= 84){
				return "B";
			}

			elseif($totalnilai <=69){
				return "C";
			}

			elseif($totalnilai <=55){
				return "D";
			}

			elseif($totalnilai<= 35){
				return "E";
			}

			else{
				return "I";
			}
	}

	function kepuasan($totalnilai){
		
   
			if($totalnilai > 80){
				return "Sangat Puas";
			}
	
			elseif($totalnilai = 80){
				return "Puas";
			}

			elseif($totalnilai < 80){
				return "Tidak Puas";
			}

			else{
				return "Not";
			}
	}
?>