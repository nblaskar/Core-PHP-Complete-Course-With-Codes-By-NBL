<?php

	//To read the perticular length of file
	$handle=fopen("103.test.txt","rb");
	$data=fread($handle,"12");
	echo $data;
	//To read the complete length of file
	$handle=fopen("103.test.txt","rb");
	$data=fread($handle,filesize("103.test.txt"));
	echo $data;
?> 