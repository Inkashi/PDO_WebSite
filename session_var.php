<?php
	session_start();
	$_SESSION["give_answers"] = false;
	$_SESSION["answers"] = [];
	$_SESSION["data"] = [];
	$_SESSION["points"] = 0;
	$_SESSION["try_again"] = false;
	$_SESSION['variant_id'] = $_POST['variant_id'];
	$_SESSION['number'] = $_POST['number'];

	header("Location: variant.php");
?>