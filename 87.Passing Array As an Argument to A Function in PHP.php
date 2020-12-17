<?php
	$marks=array(10,20,30,40);
	function total($subject=array(10,20))
	{
		$sum=0;
		foreach($subject as $num)
		{
			$sum=$sum+$num;
		}
		return $sum;
	}
	// echo total();
	echo total($marks);
	
?> 