<?php

session_start();
require ("../../db.php");

$uid = $_SESSION['userid'];

$data = $_POST['data'];
$data = json_decode($data);


$qry = "SELECT * from users where userid='$uid' ";
$res = mysqli_query($db, $qry);
$row = mysqli_fetch_assoc($res);

if ($res)
{
	if ($data->old_password == $row['password'])
	{
		$qry = "UPDATE `users` SET `password`='$data->new_password' where `userid`='$uid' ";
		$res = mysqli_query($db, $qry);

		if ($res) echo "success";
		else echo "failed";
	}
	else echo "wrong_current_password";
}
else echo "failed";

?>