<?php
session_start();
require 'connect.php';

$variant_id = $_SESSION["variant_id"];
$form_data = $_POST;

$sql = "SELECT id, answer FROM exercises WHERE variant_id = $variant_id";
$result = $link->query($sql);

$_SESSION["answers"] = [];

foreach ($result as $row) {
	$id = $row['id'];
	$answer = $row['answer'];

	if ($answer != $form_data[$id]) {
		$_SESSION["answers"][$id] = 0;
	}
	else {
		$_SESSION["answers"][$id] = 1;
	}
}

header("Location: variant.php");