<?php

	//Here Doc
	$number=786;
	echo <<<MYDATA
Welcome to PHP Here Doc
It is Very "Important" data $number
MYDATA;

	//Now Doc
	$number=786;
	echo <<<'MYDATA'
Welcome to PHP Now Doc.
It is Very "Important" 'data' $number.
MYDATA;

	
	

?> 