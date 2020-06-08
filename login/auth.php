<?php

$email = $_POST['email'];
$password = $_POST['password'];

session_start();
require("../db.php");

$email = mysqli_escape_string($db,$email);
$password = mysqli_escape_string($db,$password);
// $password = md5(sha1(crypt($password,10)));

$query = "SELECT * FROM users where email='$email' and password='$password' ";

$res = mysqli_query($db, $query);

if ($res)
{
	$row = mysqli_fetch_assoc($res);
	$sameusers = mysqli_num_rows($res);

	if ($sameusers == 1)
	{

		$_SESSION['userid']=$row['userid'];
		$_SESSION['username']=$row['username'];
	    $_SESSION['name']=$row['name'];
		$_SESSION['email']=$row['email'];
	    $_SESSION['usertype']=$row['usertype'];

	    if ($row['usertype']=="admin")
	    {
	        $_SESSION['admin_name'] = $row['name'];
	        $_SESSION['is_admin'] = true;
	    } 

	    if ($row['usertype']=="participant") header("Location:../dashboard");
	    else if ($row['usertype']=="admin") header("Location:../admin");

	}
	else header("Location:../index.php?error=login_fail");
}
else header("Location:../index.php?error=login_fail");

?>

<?php

// echo md5(sha1(crypt("htq2020",10)));

?>