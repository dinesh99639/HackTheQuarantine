<?php

session_start();
require ("../../db.php");
$uid = $_SESSION['userid'];

$data = $_POST['data'];
// $data = preg_replace("/[']/", "\'", $data);
$data = json_decode($data);

foreach ($data as $key => $value) {
    $data->$key = preg_replace("/[']/", "\'", $value);
}

$qry = "UPDATE `users` set `email`='$data->email', `name`='$data->name', `college`='$data->college', `year`='$data->year', `department`='$data->department', `rollno`='$data->rollno', `mobile`='$data->mobile', `hackerrank`='$data->hackerrank' where userid='$uid' ";

$res = mysqli_query($db, $qry);
if ($res)
{
    echo "success";
    $_SESSION['name'] = $data->name;
}
else echo "failed";

?>