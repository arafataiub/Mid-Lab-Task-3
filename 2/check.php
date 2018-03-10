<?php

    $email=$_POST['email'];
	if($email=="")
	{
		echo "Cant be blank";
	}
	else
	{
		
		echo $email;
	}

?>