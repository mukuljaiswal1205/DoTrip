<!DOCTYPE html> 
	<head> 
		<title> Login Page </title>
		<link href="Login.css" type="text/css" rel="stylesheet"/>
	</head>
	<body> 
		<?PHP include 'Header.php';	?>
		<div ID="center"> 
			<fieldset> 
				<legend> Admin Login </legend>
				<form method="POST" action="info.php">
					<table> 
						<tr> 
							<td> <label for='id'> ID </label> </td>
							<td> <input type="text" name="ID" class="textbox" TabIndex="1" required /> </td>
						</tr>
						<tr> 
							<td> <label for='pass'> Password </label> </td>
							<td> <input type="password" name="pass" class="textbox" TabIndex="2" required /> </td>
						</tr>
						<tr> 
							<td>  </td>
							<td> <center> <input type="Submit" name="Submit" value="Login" ID="Submit" /> </center> </td>
						</tr>
					</table>
				</form>
			</fieldset>
		</div>
		<?PHP include 'Footer2.php'; ?>
	</body>
</html>
