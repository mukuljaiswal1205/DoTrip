<?PHP 
	$_Mail=$_POST['txtuser_id'];
	$_Pass=$_POST['txtpassword'];
	$con=mysql_connect("localhost","root","","tourism"); 
	if(!$con)
	{
		die("Connection Faild".mysql_error()); 
	}
	else
	{
		$_query="select E_Mail from registration where E_Mail==$_Mail";
		$row=mysqli_fetch_array($con,$_query);
		echo $row;
	}
?>