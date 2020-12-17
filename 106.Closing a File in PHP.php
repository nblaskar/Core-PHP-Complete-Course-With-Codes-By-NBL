<?php

	$handle=fopen("103.test.txt","r");
	while(!feof($handle))
	{
		$data=fgets($handle);
		echo "$data";
	}
	fclose($handle);




?> 