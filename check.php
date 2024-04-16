<?php
session_start();
require 'connect.php';

if (!$_SESSION["try_again"]) {


    $variant_id = $_SESSION["variant_id"];
    $form_data = $_POST;

    $sql = "SELECT id, answer, points FROM exercises WHERE variant_id = $variant_id";
    $result = $link->query($sql);

    $_SESSION["answers"] = [];
    $_SESSION["points"] = 0;

    print_r($form_data);

    foreach ($result as $row) {
        $id = $row['id'];
        $answer = $row['answer'];
        $points = $row['points'];

        if (!isset($form_data[$id]))
            continue;

        if ($answer != $form_data[$id]) {
            $_SESSION["answers"][$id] = 0;
        } else {
            $_SESSION["answers"][$id] = 1;
            $_SESSION["points"] += $points;
        }
    }


    $_SESSION["data"] = $form_data;
    $_SESSION["give_answers"] = true;
    $_SESSION["try_again"] = true;
} else {
    $_SESSION["try_again"] = false;
}

header("Location: variant.php");