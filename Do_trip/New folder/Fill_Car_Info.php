<!DOCTYPE html>
<html lang = "en-US">
<head>
	<title>
			_blanck
	</title>
</head>
<link rel = "stylesheet" type = "text/css" href = "ToolsInfo.css" />
<body>
<?php include 'Header.php' ?>
	<section id="ItemColector_Sec" >		
		<form action="dbCar_info.php" method="GET" >
			<fieldset>
				<legend>Fill Car Information</legend>
					<table  border="0px solod">
						<tr>
							<td>
								<lable for="CarID">Car Image</lable>
							</td>
							<td>
								<input type="file" name="CarID" class="TextBox" placeholder="CarID" >
							</td>
						</tr>
						<tr>
							<td>
								<lable for="Car_Name">Car Name</lable>
							</td>
							<td>
								<input type="TextBox" name="Car_Name" class="TextBox" placeholder="Car Name">
							</td>
						</tr>
						<tr>
							<td>
								<lable for="Car_Rating">Car Rating</lable>
							</td>
							<td>
								<input type="TextBox" name="Car_Rating" class="TextBox" placeholder="Rating">
							</td>
						</tr>
						<tr>
							<td>
								<lable for="Available">Available On</lable>
							</td>
							<td>
								<input type="TextBox" name="Available" class="TextBox" placeholder="Available">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="right">
								<input type="reset" value="Reset" class="buttond">
								<input type="submit" value="submit" class="buttond">
							</td>
						</tr>
					</table>						
			</fieldset>
		</form>
	</section>
<?php include 'Footer2.php' ?>	
</body>
</html>