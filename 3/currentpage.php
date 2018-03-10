<?php

if(isset($_POST['submit']))
{

  $day=$_POST['day'];
  $mon=$_POST['month'];
  $year=$_POST['year'];
  
  if($day=="" || $mon=="" || $year=="")
  {
	  echo "Fiil up all the info first!!";
  }
  else
  {
	  echo "Day:".$day." "."Month: ".$mon." "."Year: ".$year;
  }
}


?>


<html>

<head>

<title>Date Of Birth</title>

</head>

<body>

	<form action="currentpage.php" method="post">
	
		<fieldset>
		
		<legend>Date Of Birth</legend>
		<table>
			<tr>
				<th>DD</th>
				<th>MM</th>
				<th>YY</th>
			</tr>
			<tr>
				<td> <input type="number" name="day" valur=""> /</td>
				<td> <input type="number" name="month" valur=""> / </td>
				<td> <input type="number" name="year" valur=""> </td>
			</tr>
		
		</table>
		
		
		<hr>
		<button type= "submit" name="submit" value="submit">SUBMIT</button>
		
		
		</fieldset>
	
	</form>

</body>

</html>