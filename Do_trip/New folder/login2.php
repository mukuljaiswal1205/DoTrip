<!DOCTYPE html>
<html>
	<head>
			<title>
				log in
			</title>
	</head>
<link href="log_in2.css" rel="stylesheet" type="text/css"/>
<body>
<?php include'Header.php' ?>
	<header>
		<fieldset>
		<form method="POST" action="dbLog_in.php">
			<font size="6" color="darkbule" background="yellow"> Log In Your Acount </font>
				<table>
					<tr>
						<td colspan="2">
							<center>
								<img id="Icon_Image"src="icon_login_frm.png" align="center">
							<center>
						</td>
					</tr>
					<tr>
						<td> <lable for="User_Name">User Name</lable> </td>
						<td>
							<input type="text" name="txtuser_id" id="txtUserName" placeholder="Userse id" />
						</td>
					</tr>
					<tr>
						<td>
							<lable for="Password">Password</lable> 
						</td>
						<td>
							<input type="password" id="txtPass"  name="txtpassword" placeholder="Password"/ >
						</td>
					</tr>
				</table>
			
			<section id="reg_forget">
			<input type="submit" name="Submit" id="btnLogin" tabindex="3"  value="LOG IN" />
			<br/>
			Forget you password? You can <a href="forgot_password.php" ><mark>reset it.</mark></a>
			<br/>
			Not a Member yet? Registering is free and takes a secound.
			<br/>
			<a href="Signup.php" >
				<button type="button" id="btnLogin" tabindex="3" onclick=""> REGISTER</button>
			</a>
			</section>
			</form>
		</fieldset>
	</header>
	<?php include'Footer2.php' ?>
</body>
</html>