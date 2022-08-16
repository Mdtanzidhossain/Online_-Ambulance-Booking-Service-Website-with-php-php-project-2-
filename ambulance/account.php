<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ambulance</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body style="background-color:#ffffff;">
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
						
						
					</ul>
					
					<?php
						
					?>
				</nav>
			</div>
		</header>

<style type="text/css">
	
	.loginbtn{

		color:black;
		background: rgb(57, 228, 165);
		border: none;
		border-radius: 5px;
		padding: 5px;

	}

	.loginsection{
		margin-top: 50px;
	}
</style>



	<section class="loginsection">
		<div class="wrapper">
		<div id="fom">
			<form method="post">
			<h3 style="text-align:center; color: rgb(57, 228, 165); font-weight:bold; text-decoration:underline">Client Login Area</h3>
				<table height="100" align="center">
					<tr>
						<td style="color: black;">Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter Email Address" required></td>
					</tr>
					<tr>
						<td style="color: black;">Password:</td>
						<td><input type="password" name="pass" placeholder="Enter ID Number" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="log" value="Login" class="loginbtn"></td>
						
					</tr>
				</table>
			          
			</form>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					/*$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";*/
					$qy = "SELECT * FROM patient WHERE email = '$uname' AND pasword = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
			

	</section><!--  end search section  -->

       <div class="" style=" margin-top: 250px; margin-left: 450px;">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by CliniCare Team.<br>Hotline: +8801959608444.
		</div>

<!-- whats app chat start-->

    <style>
      .whatsapp_float{
        position: fixed;
        bottom: 40px;
        right: 20px;
      }
    </style>
    <div class="whatsapp_float">
      
        <a href="https://wa.me/+8801521581815" target="_blank"><img src="http://localhost/clinicare/Coverimg/whatsapp.png" width="50px" class="whatsapp_float_btn"></a>

    </div>

  <!-- whats app chat end-->
</body>


		
	
</html>