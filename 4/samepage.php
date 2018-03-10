<?php

if(isset($_REQUEST['submit']))
{

$gender=$_REQUEST['gender'];

echo "Gender : ".$gender;

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
		
		<input type="radio" name="gender" value="male" >Male 
		<input type="radio" name="gender" value="female" >Female 
		<input type="radio" name="gender" value="other" >Other<br>
		
		
		<hr>
		<button type= "submit" name="submit" value="submit">SUBMIT</button>
		
		
		</fieldset>
	
	</form>

</body>

</html>