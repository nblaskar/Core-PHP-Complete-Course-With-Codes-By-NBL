<?php

	//process-1
	$data=file("103.test.txt");
	print_r($data);
	
	//process-2
	$data=file("103.test.txt");
	echo $data[1] . "<br/>";
	
	//process-3
	$data=file("103.test.txt");
	foreach($data as $line)
	{
		echo $line . "<br/>";
	}

	




?> 