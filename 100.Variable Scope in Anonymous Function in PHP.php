<?php
	/*
	//Anonymous Function With Parameter
	$a=function($p){
		echo "Anonymous Function $p<br/>";
	};
	$a(786);
	
	//Use Global Variable in Anonymous Function
	//Process-1
	$y=34;//Global Variable
	$a=function($p){
		echo "Anonymous Function $p<br/>";
	};
	$a($y);
	
	//Process-2
	$r=10;//Global Variable
	$a=function() use ($r){
		echo "Anonymous Function $r<br/>";
	};
	$a();
	
	*/
	//Process-3
	$y=34;//Global Variable
	$r=10;//Global Variable
	$a=function($p) use ($r){
		echo "Anonymous Function $p and  $r<br/>";
	};
	$a($y);
	

?> 