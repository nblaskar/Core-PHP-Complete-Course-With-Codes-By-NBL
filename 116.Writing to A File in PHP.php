<?php
/*
	//Writing to a file in W Mode
	$handle=fopen("116.data.txt","w");
	fwrite($handle,"Hello NBL");


	//Writing to a file in a Mode
	$handle=fopen("116.data.txt","a");
	fwrite($handle," I am PHP");
	*/
	
	
	//Standard Use of fwrite() 
	$handle=fopen("116.data.txt","a");
	if(fwrite($handle," Programming"))
	{
		echo "Success";
	}
	else
	{
		echo "Could not write";
	}
	fclose($handle);
?>  