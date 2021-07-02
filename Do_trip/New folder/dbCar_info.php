<?php 
	 $Car_Name=$_GET['Car_Name'];
	 $Rating=$_GET['Car_Rating'];
	 $Available=$_GET['Available'];	 	 
	 $con=mysql_connect("localhost","root",""); 
	 if(!$con)
	 {
		die("Connection Faild".mysql_error()); 
	 }
	 else
	{
		mysql_select_db("tourism",$con);
		$_quary="insert into car_info(Car_Name,Rating,Available)values('$Car_Name',$Rating,'$Available')";
	 $_rs=mysql_query($_quary);
	 if($_rs)
	 {
		 echo "<script> alert('Recourd Saved....!')</script>";
		 include 'Index2.php';
	 }
	 else
	 {
		 echo "<script> alert('Data Not Insert')</script>";
		 include 'Fill_Bus_Info.php';
	}
	}
?>