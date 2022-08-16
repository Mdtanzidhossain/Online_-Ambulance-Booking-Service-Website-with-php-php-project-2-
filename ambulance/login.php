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

<header style="background-color:#ba4c32">
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



	<section class="search" style="background-color:white;">
		<div class="wrapper">
		<div id="fom">
			<form method="post">
			<h3 style="text-align:center; style=background-color:#ffffff; color:black; font-weight:bold; text-decoration:underline">Admin Login Area</h3>
				<table height="100" align="center">
					<tr>
						<td style="color:black;">Email Address: </td>
						<td><input type="text" name="uname" placeholder="Enter Username" required></td>
					</tr>
					<tr>
						<td style="color:black;">Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
					<tr>
						<td style="text-align:center"><input style="background-color:black; color: white; border: none; padding: 5px 10px 5px 10px; margin-left: 0px;" colspan="2" type="submit" name="login" value="Login Here"></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"admin/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"login.php\")
									</script>";
					}
				}
			?>
			

	</section><!--  end search section  -->

 <div class="" style=" margin-top: 250px; margin-left: 450px;">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by CliniCare Team.
			<br>Hot line: +8801959608444.
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