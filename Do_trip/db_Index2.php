<?php
					$ID=$_GET['userID'];
					$pass=$_GET['Password'];
					if($ID=='admin')
					{
						if($pass=='root')
						{
							include 'Services.php';
						}
						else
						{
							echo "<script> alert('Incorect Password..!') </script>";
						}
					}
					else
					{
						echo "<script> alert('Incorect UserID..!') </script>";
					}
?>