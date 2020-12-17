<?php
/*

	//Simple use
	unlink("114.result.txt");
*/
	//Standard usde
	if(unlink("114.result.txt"))
	{
		echo "File Deleted";
	}
	else
	{
		echo "File not delete";
	}
	
?> 