<?php
function fibonacci($n,$first = 0,$second = 1)
{
	if($n >= 0)
	{
		$fib = [$first,$second];
		for($i=1;$i<$n;$i++)
		{
			$fib[] = $fib[$i]+$fib[$i-1];
		}
		return $fib;
	}else
	{
		die("Number must be an integer");
	}
  
}

/**
 * Return the nth number of a Fibonacci Series
 *
 * @param $n
 * @return integer
 */
function getNthNumber($n)
{
	// Xn = Xn-1 + Xn-2
	$fibs = fibonacci($n);
	if($n<2){
		return $fibs[$n];
	}else{
		return $fibs[$n-1] +  $fibs[$n-2];
	}
}
echo getNthNumber(4);