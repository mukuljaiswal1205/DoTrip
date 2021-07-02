<!DOCTYPE html>
<html lang = "en-US">
<head>
	<title>
			Registration
	</title>
</head>
<link rel = "stylesheet" type = "text/css" href = "Signup.css" />
<body>

	<section id="Reg_sec" >		
		<form action="InserData.php" method="GET" >
		<fieldset>
			<legend>Registration</legend>

				<table  border="0px solod">
					<tr>
						<td>
							<lable for="F_name"> First Name</lable>
						</td>
						<td>
							<input type="TextBox" name="F_Name" class="TextBox" placeholder="First Name" >
						</td>
					</tr>
					<tr>
						<td>
							<lable for="L_name"> Last Name</lable>
						</td>
						<td>
							<input type="TextBox" name="L_Name" class="TextBox" placeholder="Last Name">
						</td>
					</tr>
				</table>
						<input type="submit" value="submit">
		</form>
		
	</section>
	<?php
	/*$_name=$_GET['F_Name'];
	 $_name2=$_GET["L_Name"];
		$_dbcon=mysql_connect("localhost","root","");
		if($_dbcon)
		{
			die("Could Not Connect".mysql_error());
		}
		else
		{
			mysql_select_db("demo",$_dbcon);
			$_sql="insert into st values('dev','20')";
			$_rs=mysql_query($_sql);
			if($_rs)
			{
				echo "Data Inserted";
				
			}
			else
			{
				die ("Could Not Connect".mysql_error());
			}
		}
		mysql_close($_dbcon)
		*/
	 $_name=$_GET['F_Name'];
	 $_name2=$_GET["L_Name"];
	$_con=mysql_connect("localhost","root","") or die("connection faild");
	$_select=mysql_select_db("demo") or die("connection faild");
	$quary="insert into stinfo(name,age)values ('$_name','$_name2')";
	if(mysql_query($quary))
	{
		echo "Inserted";
	}
	else
	{
		echo "Fail";
	}
	?>	

</body>
</html>