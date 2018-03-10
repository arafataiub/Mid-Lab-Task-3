<?php

  if(isset($_POST['submit']))
  {

    $email=$_POST['email'];
	if($email=="")
	{
		echo "Cant be blank";
	}
	else
	{
		
		echo $email;
	}
  }

?>



<html>

<head>

<title>Email</title>

</head>

<body>

	<form action="samepage.php" method="post">
	
		<fieldset>
		
		<legend>Email</legend>
		Email: <input type="text" name="email" value="" placeholder="Email"><br>
		<hr>
		<button type= "submit" name="submit" value="submit">SUBMIT</button>
		
		
		</fieldset>
	
	</form>

</body>

</html>