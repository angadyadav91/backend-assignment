<?php
	$str = strtolower("abcdefAnnaRacecarMomredivider");
	$newString = '';
	$firstMax = 1;
	$secondMax = 1;
	for($i=0; $i<strlen($str); $i++){

	    
	    for($j=1; $j<strlen($str); $j++){
	        $newString = substr($str,$i,$j) ;
    	    if(strlen($newString) > 1 && (strrev($newString) == $newString)){
	            $i = $i + $j -1 ;
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
	
	echo "Final Value ".$firstMax*$secondMax;
	
?>
