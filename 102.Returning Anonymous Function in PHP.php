<?php
/*
	//Returning Anonymous Function
	function disp(){
		return function(){
				return "NBLaskar";
			};
	}
	$a=disp();
	echo $a();
	
	//Use Parameter on Returning Anonymous Function 
	function disp($str){
		return function() use($str){
				return "$str NBLaskar";
			};
	}
	$a=disp("Hello");
	echo $a();
*/

	//Use all Parameter on Returning Anonymous Function 
	function disp($str){
		return function($a_msg) use($str){
				return "$str $a_msg";
			};
	}
	$a=disp("Hello");
	echo $a("NBLaskar");




?> 