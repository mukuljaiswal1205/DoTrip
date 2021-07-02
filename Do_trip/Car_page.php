<!DOCTYPE html>
<html>
	<head>
		<title>
			Cars
		</title>
	</head>
<link href="Css/Cars_page.css" rel="Stylesheet" type="text/css" />
<body>
 <?PHP include'Header.php' ?> 
 <!-- Top Cars.. -->
	<section id="ItemColector_Sec">
		<aside id="Right_Aside">
		<font size="40px" >
			<lable>TOP Booked </lable>
		</font>
		<section id="Top_CAR1_Sec" class="Top_Select_Car">
			<img src="Images/Cars/Car1.jpg" id="Img_Top_Car1" align="left" hspace="5" vspace="5" class="Top_Cars_IMG_Class" />
			<section class="Car_details" id="Top_car1">
				<font size="5px" >
					<a href="#"><b>TopCAR 1</b></a>
				</font>
				<br/>
				<lable for="Rating">Rating: &starf;&starf;&starf;&star;&star;</lable>
				<br/>
				<lable for="Available">Available On: (U.P.)</lable>
				<br/>
				<lable for="Call">&phone;: <mark>18001800918</mark> </lable>
				<br/>
				<a href="Fill_Information.php" class="hypBook_Now">
					<img src="Images/Book_Now.png" class="TopBook_images" />
				</a>
			</section>
		</section>
		<section id="Top_CAR1_Sec" class="Top_Select_Car">
			<img src="Images/Cars/Car2.jpg" id="Img_Top_Car2" align="left" hspace="5" vspace="5" class="Top_Cars_IMG_Class" />
			<section class="Car_details" id="Top_car2">
				<font size="5px">
					<a href="#"><b>TopCAR 2</b></a>
				</font>
				<br/>
				<lable for="Rating">Rating: &starf;&starf;&starf;&star;&star;</lable>
				<br/>
				<lable for="Available">Available On: (U.P.)</lable>
				<br/>
				<lable for="Call">&phone;: <mark>18001800918</mark> </lable>
				<br/>
				<a href="Fill_Information.php" class="hypBook_Now">
					<img src="Images/Book_Now.png" class="TopBook_images" />
				</a>
			</section>
		</section>
		<section id="Top_CAR1_Sec" class="Top_Select_Car">
			<img src="Images/Cars/Car8.jpg" id="Img_Top_Car3" align="left" hspace="5" vspace="5" class="Top_Cars_IMG_Class" />
			<section class="Car_details" id="Top_car3">
				<font size="5px">
					<a href="#"><b>TopCAR 3</b></a>
				</font>
				<br/>
				<lable for="Rating">Rating: &starf;&starf;&starf;&star;&star;</lable>
				<br/>
				<lable for="Available">Available On: (U.P.)</lable>
				<br/>
				<lable for="Call">&phone;: <mark>18001800918</mark> </lable>
				<br/>
				<a href="Fill_Information.php" class="hypBook_Now">
					<img src="Images/Book_Now.png" class="TopBook_images" />
				</a>
			</section>
		</section>
		</aside>		
<!-- Related Cars.. -->
		<font size="40px" >
			<lable>Cars </lable>
		</font>
		<section id="CAR1_Sec" class="Select">
			<img src="Images/Cars/Car4.jpg" id="Img_Car1" align="left" hspace="5" vspace="5" class="IMG_Class" />
			<section class="Car_details" id="car1">
				<font size="5px">
					<a href="#"><b>CAR 1</b></a>	
				</font>
				<br/>
				<lable for="Rating">Rating: &starf;&starf;&starf;&star;&star;</lable>
				<br/>
				<lable for="Available">Available On: (U.P.)</lable>
				<br/>
				<lable for="Call">&phone;: <mark>18001800918</mark> </lable>
				<br/>
				<a href="Fill_Information.php" class="hypBook_Now">
					<img src="Images/Book_Now.png" class="Book_images" />
				</a>
			</section>
		</section>
		<section id="CAR2_Sec" class="Select">
			<img src="Images/Cars/Car5.jpg" id="Img_Car2" align="left" hspace="5" vspace="5" class="IMG_Class" />
			<section class="Car_details" id="car2">
				<font size="5px">
					<a href="#"><b>CAR 2</b></a>
				</font>
				<br/>
				<lable for="Rating">Rating: &starf;&starf;&starf;&star;&star;</lable>
				<br/>
				<lable for="Available">Available On: (U.P.)</lable>
				<br/>
				<lable for="Call">&phone;: <mark>18001800918</mark> </lable>
				<br/>
				<<a href="Fill_Information.php" class="hypBook_Now">
					<img src="Images/Book_Now.png" class="Book_images" />
				</a>
			</section>
		</section>
		<section id="CAR3_Sec" class="Select">
			<img src="Images/Cars/Car9.jpg" id="Img_Car3" align="left" hspace="5" vspace="5" class="IMG_Class" />
			<section class="Car_details" id="car3">
				<font size="5px">
					<a href="#"><b>CAR 3</b></a>
				</font>
				<br/>
				<lable for="Rating">Rating: &starf;&starf;&starf;&star;&star;</lable>
				<br/>
				<lable for="Available">Available On: (U.P.)</lable>
				<br/>
				<lable for="Call">&phone;: <mark>18001800918</mark> </lable>
				<br/>
				<a href="Fill_Information.php" class="hypBook_Now">
					<img src="Images/Book_Now.png" class="Book_images" />
				</a>
			</section>
		</section>
		<section id="Numbring_Index_sec">
			<Button type="Button" id="Btn_Next" onclick="" class="Buttons">Next</Button>
			<a href="#" class="Numbring_page" Target="_blank">1</a>
			<a href="#" class="Numbring_page">2</a>
			<a href="#" class="Numbring_page">3</a>
			<a href="#" class="Numbring_page">4</a>
			<a href="#" class="Numbring_page">5</a>
			<Button type="Button" id="Btn_Prive" onclick="" class="Buttons">Prev</Button>
		</section>
	</section>
	 <?PHP include'Footer2.php' ?>
</body>
</html>