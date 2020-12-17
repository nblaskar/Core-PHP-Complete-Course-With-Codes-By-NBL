<?php
	//Surround the variable name with Spaces
	//$value = 10;
	//echo "$value is good price";
	//echo "$valueis good price";// it provides error
	
	//To remove the space between variable and string
	//$value="NB";
	//echo "$valueLaskar";
	//echo "$value Laskar";
	//echo "{$value}Laskar";
	
	//Single Quotation is not allowed in String Interpolation
	//Eg-1
	//To Print -->Apple Price is $ten
	//$value=10;
	//echo "Apple Price is $ten"; //its wrong
	//echo 'Apple Price is $ten';
	
	//Eg-2
	//To Print --> 1 Apple Price is $ten
	$value=10;
	//echo "$value Apple Price is $ten"; //its wrong
	//echo '$value Apple Price is $ten'; //its wrong
	echo "$value Apple Price is \$ten";
		
?>