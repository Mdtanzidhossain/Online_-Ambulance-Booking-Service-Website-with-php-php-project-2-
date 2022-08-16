<?php
	//error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>

<div id="top">
			<h1><a href="#">Clinicare Ambulanc : Admin Dashboard</a></h1>

			
		</div>
<div id="navigation">
			<ul>
				<li><a href="http://localhost/clinicare/cover.php"><span>Home</span></a></li>
			    <li><a href="index.php"><span>Client-Messages</span></a></li>
			    <li><a href="add_vehicles.php"><span>Vehicle Management</span></a></li>
			    <li><a href="client_requests.php"><span>Hire Requests</span></a></li>
			    <li><a href="http://localhost/clinicare/ambulance/login.php"><span>Log out</span></a></li>
			    
			</ul>
		</div>