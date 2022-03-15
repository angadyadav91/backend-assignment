<?php
	$str = strtolower("King are you glad you are king");
	$s = explode(" ",$str);
	$newString = '';
	$firstMax = 1;
	$secondMax = 1;
	for($i=0; $i<count($s); $i++){
        $newString = $s[$i];
	    for($j=$i+1; $j<count($s); $j++){
	        $newString = $newString." ".$s[$j];
    	    if(checkPalindrome($newString)){
    	        $i = $j ;
    	        if($firstMax == 1 && $secondMax == 1){
    	            $firstMax = strlen($newString);
    	        }elseif(strlen($newString) > $firstMax ){
    	            $secondMax = $firstMax; 
    	            $firstMax = strlen($newString);
    	        }elseif(strlen($newString) > $secondMax ){
    	             $secondMax = strlen($newString); 
    	        }   
				break;                                                  
    	    }
	    }
	}
	
	echo "Final value: ".$firstMax*$secondMax;
	
	function checkPalindrome($string){	   
	    $s = explode(" ",$string);
	     $length = count($s);
	     for($j=0; $j<$length; $j++){
	         if(!($s[$j] == $s[($length -1) - $j])){
	             return false;
	         }	         
	     }
	     return true;	    
	}
	
?>