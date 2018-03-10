<?php

	$name=$_POST['name'];
	
	if($name=="")
		{
			echo "name cant be blank";
		}
	else
		{
			echo $name;
		}

?>