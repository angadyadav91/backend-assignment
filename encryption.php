<?php
	$str = "have a nice day";
	$withoutSpaceStr = str_replace(' ', '', $str);
    $length = strlen($withoutSpaceStr);
    $squareRoot = (int) sqrt($length);
    
    $row = 0;
    $column = 0;
    if($squareRoot*$squareRoot == $length){
        $row = $squareRoot;
        $column = $squareRoot;
    }else{
        $row = $squareRoot;
        $column = $squareRoot+1;
    }
    
    $finalOutput = '';
	for($i=0; $i<$column; $i++){
	    for($j=0; $j<$row; $j++){
            $index = $i + ($column * $j);
            $finalOutput .= substr($withoutSpaceStr,$index,1);
	    }
	    $finalOutput .= " ";
	    
	}
	
	
	echo $finalOutput;
?>
