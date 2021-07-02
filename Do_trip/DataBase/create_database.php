<?PHP 
	$conn = mysqli_connect("localhost","root","");
	if($conn)
	{
		$sql = mysqli_query($conn,"create database dotrip");
		if($sql)
		{
			echo "Database Created";
		}
		else
		{
			echo "not created";
		}
	}	
	else
	{
		echo "Not Connected";
	}
?>