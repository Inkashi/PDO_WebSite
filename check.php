<?php
require 'connect.php';
$form_data = $_POST;
$stmt = "SELECT answer FROM exercises WHERE subject = 'History' and variant=1";
$query = mysqli_query($link, $stmt);
$result = mysqli_fetch_all($query);

$flag = true;
for($i = 0; $i<count($result);$i++)
{
    if ($result[$i][0] !== $form_data[$i])
    {
        $flag = false;
    }
}
if ($flag)
    print_r('1');