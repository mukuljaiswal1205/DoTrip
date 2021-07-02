<?PHP 
	$Name = $_GET['Name'];
	$Mobile = $_GET['Mobile_no'];
	$EMail = $_GET['Mail'];
	$Address = $_GET['Address'];
	$City = $_GET['City'];
	$Distic = $_GET['District'];
	$State = $_GET['State'];
	$PinCode = $_GET['Pin_code'];
	$Country = $_GET['Country'];
	$From = $_GET['From_Source'];
	$To = $_GET['To_Destination'];
	
	$con = mysqli_connect("localhost","root","","tourism");
	if(!$con)
	{
		echo "Not Connected" ;
	}
	else
	{	
		$query = "insert into information(Name,Mobile,EMail,Address,City,Distic,State,PinCode,Country,From_Source,To_Destination)	values('$Name','$Mobile','$EMail','$Address','$City','$Distic','$State','$PinCode','$Country','$From','$To')";
		
		$s = mysqli_query($con,$query);
		if($s)
		{
			echo "<script> alert('Saved'); </script>";
			include "Index.php";
		}
		else
		{
			echo "<script> alert('Something Wrong, Please Try Again!'); </script>";
			include "Fill_Information.php";
		}
		
		
	}
	
?>