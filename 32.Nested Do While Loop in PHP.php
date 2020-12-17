<?php

	$num=1;
	do
	{
		echo "Count: $num<br/>";
		$num++;	
		$val=1;
		do
		{
			echo "Val: $val <br/>";
			$val++;
		}while($val<=3);
	}while($num<=2);

?>