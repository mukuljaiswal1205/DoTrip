<!DOCTYPE html>
<html lang = "en-US">
<head>
	<title>
			Registration
	</title>
</head>
<link rel = "stylesheet" type = "text/css" href = "ToolsInfo.css" />
<script type="javascript" >
	var Car=document.getElimentById("car_info");
	var Bus=document.getElimentById("Bus_info");
	var Taxi=document.getElimentById("Taxi_info");
	
	
</script >
<body>
<?php include 'Header.php' ?>
	<section id="ItemColector_Sec" >		
	<section id="rdbcheak">
		<font size="20px" ><lable for="Fill information">Select One For Fiil Information </lable>
		<select id="select_dropdown" class="filldrop">
			<option selected>Cat Information</option>
			<option> Taxi Information</option>
			<option> Bus Information</option>
			<option> Outher Information</option>
		</select></font>
	</section>
	<section id="car_info">
		<form action="DataBase/InsertCarData.php" method="GET" >
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
								<lable for="Car_Rating">Rating</lable>
							</td>
							<td>
								<input type="TextBox" name="Car_Rating" class="TextBox" placeholder="Rating">
							</td>
						</tr>
						<tr>
							<td>
								<lable for="Available">Available</lable>
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
	<section id="Bus_info">
		<form action="DataBase/InsertBusData.php" method="GET" >
			<fieldset>
				<legend>Fill Bus Information</legend>
					<table  border="0px solod">
						<tr>
							<td>
								<lable for="BusID">Bus Image</lable>
							</td>
							<td>
								<input type="file" name="BusID" class="TextBox" placeholder="Bus ID" >
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
								<lable for="Bus_Rating">Rating</lable>
							</td>
							<td>
								<input type="TextBox" name="Bus_Rating" class="TextBox" placeholder="Rating">
							</td>
						</tr>
						<tr>
							<td>
								<lable for="Available">Available</lable>
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
		
	<section id="Taxi_info">
		<form action="DataBase/InsertTaxiData.php" method="GET" >
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
								<lable for="Taxi_Rating">Rating</lable>
							</td>
							<td>
								<input type="TextBox" name="Taxi_Rating" class="TextBox" placeholder="Rating">
							</td>
						</tr>
						<tr>
							<td>
								<lable for="Available">Available</lable>
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
	</section>
<?php include 'Footer2.php' ?>	
</body>
</html>