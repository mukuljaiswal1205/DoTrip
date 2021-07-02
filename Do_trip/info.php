<!DOCTYPE html> 
	<head> </head>
	<body> 
		<?PHP 
			$con = mysqli_connect('localhost','root','','tourism');
			if($con)
			{
				$ID=$_POST['ID'];
				$Pass=$_POST['pass'];
				if($ID='Admin')
				{
					if($Pass ='Admin')
					{
						if($con)
						{
							$query = "select * from information";
							$result = mysqli_query($con,$query);
							if(mysqli_num_rows($result)>0)
							{
								echo "<table > ";
								echo "<tr> <td> SrNo </td> <td> Name </td> <td> Mobile </td> <td> EMail </td> <td> Address </td> <td> City </td> <td> Distic </td> <td> State </td> <td> PinCode </td> <td> Country </td> <td> Source </td> <td> Destination </td> </tr>";
								while($row=mysqli_fetch_assoc($result))
								{
									echo "<tr> <td>".$row['SrNo']."</td><td>".$row['Name']."</td><td>".$row['Mobile']."</td><td>".$row['EMail']."</td><td>".$row['Address']."</td><td>".$row['City']."</td><td>".$row['Distic']."</td><td>".$row['State']."</td><td>".$row['PinCode']."</td><td>".$row['Country']."</td><td>".$row['From_Source']."</td><td>".$row['To_Destination']."</td> </tr>";
								}
							}
				
						}
						else
						{
							echo "<script> alert('Not Connected'); </script>";
						}
					}
					else
					{
						echo "<script> alert('Wrong Password!'); </script>";
						include '#';
					}
				}
				else
				{
					echo "<script> alert('Wrong ID!'); </script>";
					include '#';
				}
			}
			else
			{
				echo "<script> alert('Sorry Connection Wrong!'); </script>";
			}
		?>		
	</body>
</html>