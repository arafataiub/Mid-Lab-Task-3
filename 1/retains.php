<?php

	if(isset($_REQUEST['submit']))
	{
	  $name= $_REQUEST['name'];
		
		if($name=="")
		{
			echo "name cant be blank";
		}
		else
		{
			echo $name;
			
			
		}
	}

?>



<html>

<head>

<title>Lab Task 3.1</title>

</head>

<body>

<form action="retains.php" method="post">

	<fieldset>
	
		<legend>Name</legend>
		<input type=text name="name" value="<?php echo $_REQUEST['name'] ?>" placeholder="name"><br>
		<hr>
		<button type="submit" name=submit value="click"> Submit</button>
	
	</fieldset>

</form>

</body>

</html>