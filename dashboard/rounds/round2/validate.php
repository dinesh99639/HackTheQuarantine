<?php

session_start();
require ("../../../db.php");

$uid = $_SESSION['userid'];


$keys = '
{
	"q2": "HTQCTF",
	"q3": "HTQCTF",
	"q4": "1m2b3fgsdf1bdfgs23sdfgsdfgjkb21k3bkj123kj12b3j",
	"q5": "20208023144313431382",
	"q6": "",
	"q7": "",
	"q8": "",
	"q9": ""

}';
$keys = json_decode($keys);


$user_page = $_POST['page'];
$user_key = $_POST['key'];

// echo $keys->$user_page;
if ($user_key == $keys->$user_page)
{
	$qry = "UPDATE round2 set `$user_page`= 1 ";
	$res = mysqli_query($db, $qry);
	if ($res) echo "success";
	else echo "failed";
}
else echo "invalid_key";

?>