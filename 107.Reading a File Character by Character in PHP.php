<?php
/*
	//Simple Use of fgetc()
	$handle=fopen("103.test.txt","r");
	$char=fgetc($handle);
	echo $char;
	
	//To read all character
	$handle=fopen("103.test.txt","r");
	while($char=fgetc($handle))
	{
		echo $char;
	}
*/
	//To read all character with Line Break
	$handle=fopen("103.test.txt","r");
	while($char=fgetc($handle))
	{
		if($char=="\n")
		{
			$char="<br/>";
		}
		echo $char;
	}
	fclose($handle);




?> 