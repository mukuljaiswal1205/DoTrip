<?PHP 
	$conn = mysqli_connect("localhost","root","","dotrip");
	if($conn)
	{
		echo "Connected";
		$sql = mysqli_query($conn,"create table signup(F_Name varchar(10),L_Name varchar(10),Gender varchar(7),E_Mail varchar(40),Mobile varchar(12),S_Q varchar(20),S_A varchar(20),C_Pass varchar(10))");
		if($sql)
		{
			echo "Query Execute";
		}
		else
		{
			echo "Not Execute";
		}
	}
?>