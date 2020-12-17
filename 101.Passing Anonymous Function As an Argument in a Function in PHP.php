<?php
	
	function disp($a_fun){
		return $a_fun();
	}
	echo disp(function(){
		return "NBLaskar";
	});
	

?> 