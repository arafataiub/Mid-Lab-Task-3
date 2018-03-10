<?php

$degrees = $_REQUEST['degree'];


if(isset($_REQUEST['degree']))
{
	echo "you have the following degree :"."<br>";
	
	foreach($_REQUEST['degree'] as $degree)
	{
		
		echo $degree."<br>";
		
		
	}
	
}




?>