<!DOCTYPE html>
<html lang = "en-US">
<head>
	<title>
			Forgot Password
	</title>
</head>
<link rel = "stylesheet" type = "text/css" href = "forgot_password.css" />
<body>
<?php include 'Header.php' ?>
	<section id="forgot_password" >				
		<fieldset>
			<legend>Re-Cover Password</legend>
				<form action="Forgotdb.php" method="GET">
				<table  border="0px solod">
					<tr>
						<td>
							<lable for="E_mail">E-Mail</lable>
						</td>
						<td>
							<input type="TextBox" name="txtE_mail" class="TextBox" placeholder="E-Mail"   >
						</td>
					</tr>
					<tr>
						<td>
							<lable for="S_Question">Security_Question</lable>
						</td>
						<td>
							<select name="Security_Q" class="TextBox" >
									<option selected> select</option>
									<option value="My First Mobile No">My First Mobile No</option>
									<option value="My Fevorite Teacher">My fevorite Teacher</option>
									<option value="My Nick Name?">My Nick Name?</option>
							</select>
						</td>
						
					</tr>
					<tr>
						<td>
							<lable for="S_Answer">Security_Answer</lable>
						</td>						
						<td>
							<input type="TextBox" name="txtS_Answer" class="TextBox" placeholder="Security_Question">
						</td>
					</tr>
					<tr>
						<td>
							<lable for="New Password"> New Password </lable>
						</td>
						<td>
							<input type="TextBox" name="txtNew Password" class="TextBox" placeholder="New Password" >
						</td>
					</tr>					
					<tr>
						<td colspan="2" align="right">
						<input type="submit" name="Submit" id="btnSubmit" class="Buttons" value="GO">
							<a href="Index2.php">
							<button type="Button" name="Back" id="btnBack" class="Buttons">Back</button>
							</a>
						</td>
					</tr>
				</table >			
			</form>	
		</fieldset>	
	</section>
<?php include 'Footer2.php' ?>	
</body>
</html>