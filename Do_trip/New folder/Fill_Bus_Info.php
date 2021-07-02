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
		<form action="dbBus_info.php" method="GET" >
			<fieldset>
				<legend>Fill Bus Information</legend>
					<table  border="0px solod">
						<tr>
							<td>
								<lable for="BusID">Bus ID</lable>
							</td>
							<td>
								<input type="file" name="Image" class="TextBox" placeholder="Bus ID" >
							</td>
						</tr>
						<tr>
							<td>
								<lable for="Bus_Name">Bus Name</lable>
							</td>
							<td>
								<input type="TextBox" name="Bus_Name" class="TextBox" placeholder="Bus Name">
							</td>
						</tr>
						<tr>
							<td>
								<lable for="Bus_Rating">Bus Rating</lable>
							</td>
							<td>
								<input type="TextBox" name="Bus_Rating" class="TextBox" placeholder="Rating">
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