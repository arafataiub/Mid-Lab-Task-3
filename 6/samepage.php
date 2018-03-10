<?php


if(isset($_REQUEST['blood']))
{
	echo $_REQUEST['blood'];
}



?>


<html>

<head>

<title>Blood Group</title>

</head>

<body>

	<form action= "samepage.php" method="post">
	
		<fieldset>
		
			<legend>Blood Group</legend>
			<select name="blood">
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
			
			
			
			</select>
			<hr>
			<button type=submit name="submit" value="submit">Submit</button>
			
		
		</fieldset>
	
	</form>

</body>


</html>