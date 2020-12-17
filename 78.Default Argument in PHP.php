<?php
	/*
	//(1)Use of Default Argument
	function display($name1,$name2,$name3="PHP")
	{
		echo "$name1 to $name2 $name3<br/>";
	}
	display("Welcome","Your");
	display("Welcome","Your","NBL");
	display("Welcome");
	

	//(2)Use of Default Argument in Real World
	function display($name,$phone,$address="INDIA")
	{
		echo "$name $phone $address<br/>";
	}
	display("Rahul","123");
	display("Sonam","678","Mumbai");
	
	
	
	//(3)Wrong Use of Default Argument
	function display($name1,$name2="PHP",$name3)
	{
		echo "$name1 to $name2 $name3<br/>";
	}
	display("Welcome","Your","NBL");
	display("Welcome","Your");
	display("Welcome");
	
	
	
	//(4)Use of Multiple Default Argument
	function display($name1,$name2="PHP",$name3="Programming")
	{
		echo "$name1 to $name2 $name3<br/>";
	}
	display("Welcome","Your","NBL");
	display("Welcome","Your");
	display("Welcome");
	
	
	
	//(5)Use NULL as Default Value
	function display($name,$phone,$address=NULL)
	{
		if($address==NULL)
		{
			echo "Sorry did not enter Address!";
		}
		else
		{
			echo "Your name=$name, Your Phone=$phone and Your Address=$address<br/>";
		}
	}	
	display("Sonam","678","Mumbai");
	display("Rahul","123");
	
	*/
	
	//(6)Use Array as Default Value
	function display($name,$phone,$address=array("Address Not Found"))
	{
		
			echo "Your name=$name, Your Phone=$phone and Your Address=$address[0]<br/>";
	
	}	
	display("Sonam","678",array("India"));
	display("Rahul","123");
	
	
?> 