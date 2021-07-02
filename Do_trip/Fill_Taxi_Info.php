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
		<form action="dbTaxi_info.php" method="GET" >
			<fieldset>
				<legend>Fill Taxi Information</legend>
					<table  border="0px solod">
						<tr>
							<td>
								<lable for="TaxiID">Taxi Image</lable>
							</td>
							<td>
								<input type="file" name="TaxiID" class="TextBox" placeholder="Taxi ID" >
							</td>
						</tr>
						<tr>
							<td>
								<lable for="Taxi_Name">Taxi Name</lable>
							</td>
							<td>
								<input type="TextBox" name="Taxi_Name" class="TextBox" placeholder="Taxi Name">
							</td>
						</tr>
						<tr>
							<td>
								<lable for="Taxi_Rating">Taxi Rating</lable>
							</td>
							<td>
								<input type="TextBox" name="Taxi_Rating" class="TextBox" placeholder="Rating">
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