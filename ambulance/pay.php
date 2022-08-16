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
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			
	</section><!--  end hero section  -->



	<section class="listings" style="background-color:white;">
		<div class="wrapper">
			<ul class="properties_list">
				<h3 style="text-decoration: underline">Payments to proceed</h3>
				
				<form method="post" style="display: flex;">
					<!--<table>
						<tr>
							<td>MPESA Transaction ID:</td>
							<td><input type="text" name="mpesa" required></td>
						</tr>
						<tr>
							<td>National ID Number:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit Details"></td>
						</tr>
					</table>-->
					<div class="info">
					<h3>Location: <input type="text" name="mpesa" required></h3>
					<h3>Contact No: <input type="text" name="id_no" required></h3>
					<h3>Bikash Account No: <input type="text" name="bikash" required></h3>
					<input style="background-color:#e2136e; border: none; padding: 5px 10px 5px 10px; color:white;" type="submit" name="pay" >
					</div>
					<div class="bikashQRcode" style="margin-left: 300px; margin-top:-180px ;">
						<img src="http://localhost/clinicare/ambulance/img/clinicareBikash.jpg">
					</div>
				</form>
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$mpesa = $_POST['mpesa'];
							$id_no = $_POST['id_no'];
							$bikash= $_POST['bikash'];
							
							$qry = "INSERT INTO ambulance_payment VALUES ('$mpesa','$id_no','$bikash','')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Wait for Admin Approval\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
			
		</div>
	</section>	<!--  end listing section  -->



<footer style="background-color:#054D27 ;">

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by CliniCare Team.
			<br>Hot line: +8801959608444.
		</div>
	</footer>

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

