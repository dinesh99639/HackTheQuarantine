<?php

session_start();

require ("../../db.php");	
  // if (0)
if($_FILES["file"]["size"] > 0)
{
	$filename=$_FILES["file"]["tmp_name"];

	$file = fopen($filename, "r");
	$stu = fgetcsv($file);

	$total=0;
	$success = 0;

	while (($val = fgetcsv($file)) !== FALSE)
	{
		$l=sizeof($val);

		for ($i=0;$i<$l;$i++)
		{
		  $val[$i] = preg_replace("/[']/", "\'", $val[$i]);
		  $val[$i] = preg_replace('/["]/', '\"', $val[$i]);
		}

		$qry = "INSERT INTO `users`(`email`, `name`, `password`, `usertype`, `college`, `year`, `department`, `rollno`, `mobile`) VALUES ('$val[1]', '$val[2]', 'htq2020', 'participant', '$val[3]', '$val[4]', '$val[5]', '$val[6]', '$val[7]') ";

		$res = mysqli_query($db, $qry);
		if ($res)
		{
			$success += 1;
			// echo "success";
		}
		else
		{
			// echo $qry."\n\n";
			// echo "failed";
		}

		$total += 1;
		// $val="";
		// $l=sizeof($stu);
		// for ($i=0;$i<$l;$i++)
		// {
		//   $stu[$i] = preg_replace("/[']/", "\'", $stu[$i]);
		//   $stu[$i] = preg_replace('/["]/', '\"', $stu[$i]);
		// }
		// $val = implode('", "', $stu);

		// $str_arr = explode (",", $stu);
		// echo $val."<br><br>";
		// $sql = "INSERT INTO `users` VALUES (\"".$val."\")";
		// $result = mysqli_query($db, $sql);
		// $c++;
		// echo $sql."\n\n";

		// print_r($stu);

	}
	fclose($file);
	echo $success."/".$total;
}
else echo "failed";


?>