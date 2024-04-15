<?php
	session_start();

	$_SESSION['subject'] = $_POST['subject'];

	header("Location: ITandIKT.php");
?>