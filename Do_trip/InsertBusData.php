<?php
	$_Bus_Name=$_GET['Bus_Name'];
	$_Bus_Rating=$_GET['Bus_Rating'];
	$_Available=$_GET['Available'];
	
	mysql_connect("localhost","root","") or die("Connection Faild");
	mysql_select_db("tourism") or die("Databse Not Found");
	$_Quary="insert into bus_info (Bus_Name,Rating,Available) values ("$_Bus_Name","$_Bus_Rating","$_Available")";
	if(mysql_query($_Quary))
	 {
		echo "<script> alert('Record Saved.') </script>";
		echo "<script> windows.open('C:/xampp/htdocs/Angle/Car_page.php') </script>";		
	}
	else
	{
		echo "<script> alert('Faild.') </script>";
	}
?>