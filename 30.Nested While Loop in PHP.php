<?php
	/*
	//Standard Nested While Loop Structure
	$num=1;
	while($num<=2)
	{
		echo "Count: $num<br/>";
		$num++;	
		$val=1;
		while($val<=3)
		{
			echo "Val: $val <br/>";
			$val++;
		}
	}
	echo "Rest of the Code";
	*/
	
	//Standard Nested While Loop Structure
	$num=1;
	while($num<=2):
		echo "Count: $num<br/>";
		$num++;	
		$val=1;
		while($val<=3):
			echo "Val: $val <br/>";
			$val++;
		endwhile;
	endwhile;
	echo "Rest of the Code";
	
	

?>