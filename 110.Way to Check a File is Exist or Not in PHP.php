<?php

	//simple use of file_exists()
	echo file_exists("103.test.txt");
	//Standard use of file_exists()
	$filename="103.test.txt";
	if(file_exists($filename))
	{
		echo "$filename File is found here";
	}
	else
	{
		echo "$filename is not found";
	}
	//when file is not present
	$filename="test.txt";
	if(file_exists($filename))
	{
		echo "$filename File is found here";
	}
	else
	{
		echo "$filename is not found";
	}

	




?> 