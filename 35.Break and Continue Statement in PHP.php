<?php

	for($num=1;$num<=7;$num++)
	{
		if($num==3):
			echo "$num is skipped by Continue Statement<br/>";
			continue;
		endif;
		if($num==5):
			echo "Breaked at $num by break Statement<br/>";
			break;
		endif;
		echo "Count: $num<br/>";		
	}

?>