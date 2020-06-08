<?php

session_start();
require("../db.php");

$uid = $_SESSION['userid'];
$qry = "SELECT * FROM users where userid = '$uid' ";
$res = mysqli_query($db, $qry);
$data = mysqli_fetch_assoc($res);

?>

<style type="text/css">
	.round
	{
		margin-top: 20px;
	}
	.round_title
	{
		text-align: center;
		font-size: 30px;
	}
	.round_content
	{
		margin-top: 60PX;
	}
	.round_head
	{
		font-size: 25px;
	}
	.round_details
	{
		margin-top: 10px;
		font-size: 16px;
	}
	.round_details ul li::before
	{
		content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
		color: black;
		font-weight: bold;
		display: inline-block;
		width: 1em;
		margin-left: 1em;
	}
	.round_details input
	{
		text-align: center;
	}

	.quote
	{
		text-align: center;
		margin-top: 60px;
	}
	input
	{
		height: 20px!important;
		width: 250px!important;
		padding-bottom: 2px!important;
	}
	.inp-label
	{
		text-align: center;
	}

	.round_details .submit input
	{
		/*text-align: center;*/
		/*vertical-align: middle;*/
		height: 40px!important;
		margin-top: 20px;
	}
</style>

<div class="round">
	<div class="round_title">Profile</div>
	<div class="round_content">
		<!-- <div class="round_head">Instructions</div> -->
		<form id="profile_form">
		<div class="round_details">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 inp-label">Full Name</div>
					<div class="col-sm-6"><input type="text" name="name" value="<?php echo $data['name'] ?>"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 inp-label">Email</div>
					<div class="col-sm-6"><input type="email" name="email" value="<?php echo $data['email'] ?>"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 inp-label">Mobile no</div>
					<div class="col-sm-6"><input type="text" name="mobile" value="<?php echo $data['mobile'] ?>"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 inp-label">Hackerrank Username</div>
					<div class="col-sm-6"><input type="text" name="hackerrank" value="<?php echo $data['hackerrank'] ?>"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 inp-label">Roll no</div>
					<div class="col-sm-6"><input type="text" name="rollno" value="<?php echo $data['rollno'] ?>"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 inp-label">Year</div>
					<div class="col-sm-6"><input type="text" name="year" value="<?php echo $data['year'] ?>"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 inp-label">Department</div>
					<div class="col-sm-6"><input type="text" name="department" value="<?php echo $data['department'] ?>"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 inp-label">College</div>
					<div class="col-sm-6"><input type="text" name="college" value="<?php echo $data['college'] ?>"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 inp-label"></div>
					<div class="col-sm-6"><div class="submit pro_submit"><input type="submit" class="btn" name="" value="Update"></div></div>
				</div>
						
			</div>
		</div>
		</form>
	</div>
</div>

<script>

	$('.pro_submit').click(()=>{
		show_preloader();
		var json = form2json("#profile_form");
		// console.log(json);
		$.ajax({
			async: false,
			url: "update/update_profile.php",
			method: "post",
			data: {data: json},
			success: function (res){
				if (res == "success")
				{
					hide_preloader();
					M.toast({html: 'Updated Successfully'});
				}
				else if (res == "failed")
				{
					// hide_preloader();
					$('.page_content').load("profile.php", ()=>{hide_preloader();});

					M.toast({html: 'Updation failed!<br>There may be a technical problem.<br>Please contact the adminstrator.'});
				}
			}
		});

		return false;
	});
</script>