<?php
		
			if(isset($_REQUEST['submit']))
			{
				
				$name=$_REQUEST['name'];
				$pass=$_REQUEST['pass'];
				
				if($name=="" || $pass=="")
				{
					echo "Invalid name or Password";
				}
				else
				{
					echo "NAME: ".$name." Password: ".$pass;
				}
				
				
			}
		
		
?>
		
<html>

<head>

<title>Lab Task 3.1</title>

</head>

<body>

	<form action="samepage.php" method="post">

	<fieldset>
	
		<legend>Name</legend>
		Name: <input type="text" name="name" value="" placeholder="Name"><br>
		Password: <input type="password" name="pass" value="" placeholder="password"><br>
		<hr>
		<button type="submit" name="submit" value="submit">Submit</button>
		
		
		
		
		
	
	</fieldset>
	
	</form>

</body>

</html>


