<?php

$reeks = [6,2,10,4,3,6,9,5,13,7,4,2,5];
$for_count = 0;
$swap_count = 0;

function swap($n){
	global $reeks;
	global $swap_count;

	$temp = $reeks[$n-1];
	$reeks[$n-1] = $reeks[$n];
	$reeks[$n] = $temp;

	$swap_count++;
}



for($n = 1; $n < count($reeks); $n++){
	$for_count++;

	$substract = 0;

	while($reeks[$n - $substract] < $reeks[$n-1-$substract]){
		swap($n - $substract);
		$substract++;

		if($n - $substract == 0){ break; }
	}

}

print_r($reeks);
echo '<br>';
echo "for loops: " . $for_count . "<br>";
echo "swaps: " . $swap_count;
echo '<br>';


echo '<br>';

//---------------



echo "Doordat Henk niet goed oplet op de beurs verliest hij per dag 20% van zijn vermogen.<br><hr>";


$dagen = 0;
function recursie2($tegoed){
    global $dagen;
    
        if(number_format($tegoed,2) == 0)
            return 'Geen saldo meer';  
        $verlies = $tegoed * 0.2;
        
        $tegoed = $tegoed - $verlies;

        
        $dagen++;
       
            if($dagen == 1){
                $dagentekst = "dag";
            }  else{
                $dagentekst = "dagen";
            }
        
//        echo "€ ". number_format($tegoed,2) . " ------- na ".$dagen." " .$dagentekst. '<br>';
        echo "Na ".$dagen." " .$dagentekst. " € ". number_format($tegoed,2) . " over<br>";
        recursie2($tegoed);
          
        }
    

recursie2(10000);

?>



