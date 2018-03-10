<?php

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


?>