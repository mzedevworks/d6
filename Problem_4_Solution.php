<?php
function productsOfSeven()
{
	$answer = 0;
	$value = '';
	for($i=1; $i<=300; $i++){
		if($i == 1)
		{
			$answer = 7;
			$value .= "7 x $i = $answer, "; 
		}else
		{
			$answer += 7;
			$value .= "7 x $i = $answer, ";
		}
		
	}
	return $value;
}
echo productsOfSeven();