<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE patient SET status = 'Approved' WHERE patient_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Request has Successfully been Approved';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
