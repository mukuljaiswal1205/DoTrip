<!DOCTYPE html>
<html>

<style type="text/css">
#Banner_Sec{border: 1px solid;height:auto;background:turquoise; margin:0 5px 0 5px; width:80%;margin-left:10%}
#IMGLogo{border: 0px solid; height: 150px; margin-left:40%;}
#website_name{border: px solid; width: 60%;}
#SearchBox_sec{border:0px solid; width: 40%; margin-left: 60%; padding-bottom: 3px }
#Acount_FeedBack_sec{ width: 20%; float: right;}
#Acount_FeedBack_sec a{text-decoration: none; font-size: 20px;}
#lblBanner_Name{font-size: 50px; margin-left: 20%;}
#lblContect_Mail,#lblContect_Number{font-size: 25px; background: grey; color: white; border-radius: 10px;  }
#lblContect_Number{margin-left: 68%}
nav{ width: 80%; margin-left: 10%; margin-bottom: 2px;border: 1px solid;}
/* menu section coding */
ul {list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;}
li {float: left;}
li a, .dropbtn {display: inline-block;color: white;text-align: center;padding: 14px 16px;text-decoration: none;}
li a:hover, .dropdown:hover .dropbtn {background-color: red;}
li.dropdown {display: inline-block;}
.dropdown-content {display: none;position: absolute;background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 1;}
.dropdown-content a {color: black;padding: 12px 16px;text-decoration: none;display: block;text-align: left;}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {display: block;}
#Home{margin-left: 40%}
#search_Box{margin-left: 2%; font-size: 20px; width:70%;height:35px;border-radius: 5px;}
#btn_submit{font-size: 20px; width:25%;background: crimson; color: white;}
</style>
<body>
	<section id="Banner_Sec">
		<div id="website_name">
			<center>
				<img src="Images/Text_Logo.png"  id="IMGLogo" />
			</center>
		</div>
	</section>
	<!-- For  Menu Section -->
	<nav>
		<ul>
		  <li><a href="Index.php">HOME</a></li>
		  <li><a href="About.php">ABOUT</a></li>
		  <li class="dropdown">
			<a  class="dropbtn">SERVICES</a>
			<div class="dropdown-content">
			  <a href="Taxi_page.php">Taxi Rental</a>
			  <a href="Car_page.php">Car Rental</a>
			  <a href="Buses_page.php">Bus Rental</a>			  
			</div>
		  </li>
		  
		  <li class="dropdown">
			<a  href="Contact.php"> CONTACT </a>
		  </li>
		</ul>
	</nav>
</body>
</html>