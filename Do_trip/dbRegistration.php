<?php
	 $_Fname=$_POST['txtF_Name'];
	 $_Lname=$_POST["txtL_Name"];
	 $_Gender=$_POST["Gender"];
	 $_E_Mail=$_POST["txtE_Mail"];
	 $_Mobile_No=$_POST["txtMobile_No"];
	 $_Security_Question=$_POST["Security_Q"];
	 $_Security_Answer=$_POST["txtAnswer"];
	 $_Password=$_POST["txtConf_Password"];
	 
	$con=mysqli_connect("localhost","root","","tourism") or die("connection faild");
	$query="insert into registration (First_Name,Last_Name,Gender,E_Mail,Mobile_No,Security_Question,Security_Answer,Password)values ('$_Fname','$_Lname','$_Gender','$_E_Mail','$_Mobile_No','$_Security_Question','$_Security_Answer','$_Password')";
	if(mysqli_query($con,$query))
	{
		echo "<script> alert('Request Successfully Sent!.') </script>";
		include 'Index2.php';		
	}
	else
	{
		echo "<script> alert('Faild.') </script>";
		include 'Registration.php';
	}
	?>	