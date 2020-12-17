<?php
	/*
	//Standered Switch Statement in PHP
	$data=10;
	switch($data){
		case 10:
			echo "C Programming";
			break;
		case 20:
			echo "C++ Programming";
			break;
		case 30:
		case 40:
			echo "Java Programming";
			echo "JavaScript Programming";
			break;
		case 50:
			echo "PHP Programming";
			break;
		default:
			echo "Given Data is not match with any Switch Case data";
	}
	*/
	
		//Advance Switch Statement in PHP
		$data="wed";
	switch($data):
		case "MON":
			echo "C Programming";
			break;
		case "TUE":
		case "tue":
			echo "C++ Programming";
			break;
		case "WED":
		case "wed":
			echo "Java Programming<br/>";
			echo "JavaScript Programming";
			break;
		case "THU":
			echo "PHP Programming";
			break;
		default:
			echo "Given Data is not match with any Switch Case data";
	endswitch;
	
?>