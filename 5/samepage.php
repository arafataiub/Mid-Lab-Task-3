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




<html>

<head>

<title>Gender</title>

</head>

<body>

	<form action="samepage.php" method="post">
	
		<fieldset>
		
		<legend>Gender</legend>
		
		<input type="checkbox" name="degree[]" value="SSC" >SSC 
		<input type="checkbox" name="degree[]" value="HSC" >HSC 
		<input type="checkbox" name="degree[]" value="Bsc" >Bsc
		<input type="checkbox" name="degree[]" value="Msc" >Msc<br>
		
		
		<hr>
		<button type= "submit" name="submit" value="submit">SUBMIT</button>
		
		
		</fieldset>
	
	</form>

</body>

</html>