<!DOCTYPE html>
<html>
	<head>
			<title>
				Fill Information
			</title>
	</head>
<link href="Fill_Information.css" rel="stylesheet" type="text/css"/>
<body>
<?php include 'Header.php' ?>
	<section id="Item_Contener">
	<form action="Fill_Informationdb.php" method="GET">
		<fieldset style="float:right;" id="Information">
			<font size="10px" align="center" color="#146670" >Information *</font>
			<br/><br/>
			<table border="0px solid" >				
				<tr>
					<td>
						<lable for="From">Source</lable>
					</td>				
					<td>
						<input type="TextBox" id="txtFrom" name="From_Source" class="TextBox" TabIndex="10" placeholder="From"  required="required" />
					</td>
				</tr>
				
				<tr>
					<td>
						<lable for="To">Destination </lable>
					</td>				
					<td>
						<input type="TextBox" id="txtTo" name="To_Destination" class="TextBox" TabIndex="11" placeholder="To"  required="required" />
					</td>
				</tr>
			</table>
		</fieldset>
<!-- Fill Persnol Information -->
		<fieldset id="Personal_Information">
			<font size="10px" align="center" color="#146670" >Personl Information *</font>
			<br/><br/>
				<table border="0px solid" >				
					<tr>
						<td>
							<lable for="Name"> Name </lable>
						</td>				
						<td>
							<input type="TextBox" id="txtname" name="Name" class="TextBox" TabIndex="1" placeholder="Name"  required="required" />
						</td>
					</tr>
					<tr>
						<td>
							<lable for="Mobile_No.">Mobile No.</lable>
						</td>				
						<td>
							<input type="TextBox" id="txtMobile_No" name="Mobile_no" class="TextBox" TabIndex="2" placeholder="Mobile No."  required="required" />
						</td>
					</tr>
					<tr> 
						<td> 
							<lable for="E_Mail0"> E-Mail </lable>
						</td>
						<td> 
							<input type="email" id="txtMail" name="Mail" class="TextBox" TabIndex="3" placeholder="E Mail" required="required" />
						</td>
					</tr>
					<tr>
						<td>
							<lable for="Address">Address</lable>
						</td>				
						<td>
							<input type="text" id="txtAddress" name="Address" class="TextBox" TabIndex="4" placeholder="Address"  required="required" />
						</td>
					</tr>						
					<tr>
						<td>
							<lable for="City">City</lable>
						</td>				
						<td>
							<input type="TextBox" id="txtCity" name="City" class="TextBox" TabIndex="5" placeholder="City"  required="required" />
						</td>
					</tr>
					<tr>
						<td>
							<lable for="Distic">District</lable>
						</td>				
						<td>
							<input type="TextBox" id="txtDistrict" name="District" class="TextBox" TabIndex="6" placeholder="District"  required="required" />
						</td>
					</tr>
					<tr>
						<td>
							<lable for="State">State</lable>
						</td>				
						<td>
							<select name="State" class="TextBox" TabIndex="7" required > 
								<option value="Andhra Pradesh "> Andhra Pradesh </option>
								<option value="Arunachal Pradesh"> Arunachal Pradesh </option>
								<option value="Assam"> Assam </option>
								<Option value="Bihar"> Bihar </option>
								<option value="Chhattisgarh"> Chhattisgarh </option>
								<option value="Goa"> Goa </option>
								<option value="Gujrat"> Gujrat </option>
								<option value="Hariyana"> Hariyana </option>
								<option value="Himanchal Pradesh"> Himanchal Pradesh </option>
								<option value="Jammu & Kashmir"> Jammu & Kashmir </option>
								<option value="Jharkhand"> Jharkhand </option>
								<option value="Karnatak"> Karnatak </option>
								<option value="Kerla"> Kerla </option>
								<option value="Madhya Pradesh" > Madhya Pradesh </option>
								<option value="Maharastra" > Maharastra </option>
								<option value="Manipur"> Manipur </option>
								<option value="Meghalay"> Meghalay </option >
								<option value="Mizoram"> Mizoram </option>
								<option value="Nagaland"> Nagaland </option>
								<option value="Odisha"> Odisha </option>
								<option value="Panjab"> Panjab </option>
								<option value="Rajasthan"> Rajasthan </option>
								<option value="Sikkim"> Sikkim </`option>
								<option value="TamilNadu"> Tamil Nadu </option>
								<option value="Telangana"> Telangana </option>
								<option value="Tripura"> Tripura </option>
								<option value="Uttar Pradesh" > Uttar Pradesh </option>
								<option value="Uttarakhand"> Uttarakhand </option>
								<option value="West Bengal"> West Bengal </option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<lable for="Pin_Code">Pin_Code</lable>
						</td>				
						<td>
							<input type="TextBox" id="txtPin_Code" name="Pin_code" class="TextBox" maxlength="6" TabIndex="8" placeholder="Pin Code"  required="required" />
						</td>
					</tr>
					<tr>
						<td>
							<lable for="Country"> Country </lable>
						</td>				
						<td>
							<input type="TextBox" id="txtCountry" name="Country" class="TextBox" value="India" TabIndex="9" required="required" readonly />
						</td>
					</tr>
					
				</table>
				<br/>
			</fieldset>
			<br/><br/>
				<center>
					<input type="reset" id="btnReset" class="Buttons" value="Reset" />
					<input type="submit" id="btnSubmit" class="Buttons" value="Submit" />
				</center>
			</form>
	</section>
	<?php include 'Footer2.php' ?>
</body>
</html>