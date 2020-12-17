<?php
	//Writing a String
	// file_put_contents("118.data.txt","Hello");
	
	// Appending a String
	// file_put_contents("118.data.txt"," I am PHP",FILE_APPEND);
	
	// Standard Use 
	if((file_put_contents("118.data.txt"," Programming",FILE_APPEND))==FALSE)
	{
		echo "Could not Write";
	}
	else
	{
		echo "Success";
	}

?>  