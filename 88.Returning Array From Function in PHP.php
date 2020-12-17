<?php
	function mathop($num1,$num2)
	{
		$sum=$num1+$num2;
		$sub=$num1-$num2;
		$mul=$num1*$num2;
		$div=$num1/$num2;
		$solution=array($sum,$sub,$mul,$div);
		return $solution;
	}
	$result=mathop(50,10);
	echo "Sum = " . $result[0]."<br/>";
	echo "Sub = " . $result[1]."<br/>";
	echo "Mul = " . $result[2]."<br/>";
	echo "Div = " . $result[3]."<br/>";
	
?> 