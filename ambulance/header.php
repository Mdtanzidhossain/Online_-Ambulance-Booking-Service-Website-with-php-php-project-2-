<?php
	session_start();
	//error_reporting("E-NOTICE");
?>
<header style="background-color:#054D27">
			<div class="wrapper">
				<h1 style=" color:white ;" class="logo">clin<span style="color:red;">C</span>are-Ambulance</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<style type="text/css">
						
						.nav:hover {
							background-color: black;
							padding: 5px;

						}
					</style>
					<?php
						//if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li class="nav"><a href="http://localhost/clinicare/cover.php">Home</a></li>
						<li class="nav"><a href="status.php">View Status</a></li>
                        <li class="nav"><a href="message_admin.php">Message Admin</a></li>
                        <li class="nav"><a href="http://localhost/clinicare/cover.php#login">Logout</a></li>
						
					</ul>
					
					<?php
						
					?>
				</nav>
			</div>
		</header>