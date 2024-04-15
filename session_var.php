<?php
	session_start();

	$_SESSION['variant_id'] = $_POST['variant_id'];
	$_SESSION['number'] = $_POST['number'];

	header("Location: variant.php");
?>