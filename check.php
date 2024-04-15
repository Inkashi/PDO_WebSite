<?php
session_start();
require 'connect.php';

$variant_id = $_SESSION["variant_id"];
$form_data = $_POST;

$sql = "SELECT id, answer FROM exercises WHERE variant_id = $variant_id";
$result = $link->query($sql);

$_SESSION["answers"] = [];

print_r($form_data);

foreach ($result as $row) {
	$id = $row['id'];
	$answer = $row['answer'];

	if (!isset($form_data[$id]))
		continue;

	if ($answer != $form_data[$id]) {
		$_SESSION["answers"][$id] = 0;
	} else {
		$_SESSION["answers"][$id] = 1;
	}
}


$_SESSION["data"] = $form_data;
$_SESSION["give_answers"] = true;

header("Location: variant.php");
