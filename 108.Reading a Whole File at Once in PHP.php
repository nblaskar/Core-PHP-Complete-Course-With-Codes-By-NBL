<?php
/*
	//Read the whole file contents
	$data=file_get_contents("103.test.txt");
	echo $data;

*/
	//Read the whole file contents with line break
	$data=file_get_contents("103.test.txt");
	$result=str_replace("\n","<br/>",$data, $total);
	echo $result;
	echo $total;




?> 