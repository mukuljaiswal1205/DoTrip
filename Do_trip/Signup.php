<!DOCTYPE html>
<html lang = "en-US">
<head>
	<title>
			Registration
	</title>
</head>
<link rel = "stylesheet" type = "text/css" href = "Registration.css" />
<body>
<?php include 'Header.php' ?>
	<section id="Reg_sec" >		
		<form action="dbRegistration.php" method="POST" name="form1">
		<fieldset>
			<legend>Registration</legend>
				<table  border="0px solod">
					<tr>
						<td>
							<lable for="F_name"> First Name</lable>
						</td>
						<td>
							<input type="TextBox" name="txtF_Name" class="TextBox" placeholder="First Name" required="required"  >
						</td>
					</tr>
					<tr>
						<td>
							<lable for="L_name"> Last Name</lable>
						</td>
						<td>
							<input type="TextBox" name="txtL_Name" class="TextBox" placeholder="Last Name" required="required" >
						</td>
					</tr>
					<tr>
						<td>
							<lable for="Gender">Gender</lable>
						</td>
						<td>
							<input type="Radio" name="Gender" id="rdb_male" class="Radio_Buttons" value="Male" selected="selected" >Male</radio>
							<input type="Radio" name="Gender" id="rdb_Female" class="Radio_Buttons" value="Female" > Female</radio>
						</td>
					</tr>
					<tr>
						<td>
							<lable for="E_Mail">E-Mail<font color="red">*</font></lable>
						</td>
						<td>
							<input type="TextBox" name="txtE_Mail" class="TextBox" placeholder="E-Mail" required="required" >
						</td>
					</tr>
					<tr>
						<td>
							<lable for="M_name"> Mobile No.<font color="red">*</font></lable>
						</td>
						<td>
							<input type="TextBox" name="txtMobile_No" class="TextBox" placeholder="Mobile No" required="required" >
						</td>
					</tr>
					
					<tr>
						<td>
							<lable for="Security Question"> Security Question<font color="red">*</font></lable>
						</td>
						<td>
							<select name="Security_Q" class="TextBox"  >
									<option selected> select</option>
									<option value="My First Mobile No">My First Mobile No</option>
									<option value="My Fevorite Teacher">My fevorite Teacher</option>
									<option value="My Nick Name?">My Nick Name?</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<lable for="Answer"><b>Answer</b></lable>
						</td>
						<td>
							<input type="TextBox" name="txtAnswer" class="TextBox" placeholder="Answer" required="required" >
						</td>
					</tr>					
					<tr>					
						<td>
							<lable for="Create_password"><b>Create Password</b></lable>
						</td>
						<td>
							<input type="TextBox" name="txtCreate_password" class="TextBox" placeholder="Create Password" required="required" >
						</td>
					</tr>
					<tr>
						<td>
							<lable for="Conform_password">Conform Password</lable>
						</td>
						<td>
							<input type="TextBox" name="txtConf_Password" class="TextBox" placeholder="Conform Password" required="required" >
						</td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="reset" name="Reset" id="btnReset" class="Buttons" value="Reset">
							<input type="submit" name="Submit" id="btnSubmit" class="Buttons" value="Next">
						</td>
					</tr>
				</table>			
		</fieldset>
	</form>
		<!-- For Registration Information -->
			<section id="Infomation">
				<font  style="font-size: 70px; color:firebrick; text-shadow: 7px 0px 5px white; ">Get Free Registration.. </font>			
			</section>
	</section>
<?php include 'Footer2.php' ?>	
</body>
</html>
<?PHP/* 
	$F_Name = $_POST['txtF_Name'];
	$L_Name = $_POST['txtL_Name'];
	$Gender = $_POST['Gender'];
	$E_Mail = $_POST['txtE_Mail'];
	$Mobile = $_POST['txtMobile_No'];
	$S_Q = $_POST['Security_Q'];
	$S_A = $_POST['txtAnswer'];
	$C_Pass = $_POST['txtCreate_password'];
	$conf_pass = $_POST['txtConf_Password'];
	/*echo $F_Name;
	echo $L_Name;
	echo $Gender;
	echo $E_Mail;
	echo $Mobile;
	echo $S_Q;
	echo $S_A;
	echo $C_Pass;
	echo $conf_pass;*/
	/*$conn = mysqli_connect("localhost","root","","dotrip");
	if($conn)
	{
		if($C_Pass == $conf_pass)
		{
			$sql = "insert into signup values('$F_Name','$L_Name','$Gender','$E_Mail','$Mobile','$S_Q','$S_A','$C_Pass')";
			if(mysqli_query($conn,$sql))
			{
				echo "Inerted";
			}
			else
			{
				echo "Sorry";
			}
		}
		else
		{
			echo "Password Doesn't Match";
		}
	}
	
	
	*/
?>
