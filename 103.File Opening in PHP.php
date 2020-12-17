<?php
	//To open an URL in read Mode
	$handle=fopen("https://nblaskar.live","r");
	if($handle){
		echo "File Opened";
	}
	else{
		echo "Not Found";
	}

	//To open a File in write Mode
	$handle=fopen("103.test.txt","w");
	if($handle){
		echo "File Opened";
	}
	else{
		echo "Not Found";
	}

	//When a file is not found
	$handle=fopen("test.txt","r");
	if($handle){
		echo "File Opened";
	}
	else{
		echo "Not Found";
	}




?> 