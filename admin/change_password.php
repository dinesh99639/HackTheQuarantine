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

	.quote
	{
		text-align: center;
		margin-top: 60px;
	}
	input
	{
		height: 20px!important;
		width: 250px!important;
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
	.btn
	{
		height: 100%!important;
	}
</style>

<div class="round">
	<div class="round_title">Change Password</div>
	<div class="round_content">
		<!-- <div class="round_head">Instructions</div> -->
		<form id="password_form">
		<div class="round_details">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 inp-label">Current Password</div>
					<div class="col-sm-6"><input type="password" name="old_password"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 inp-label">New Password</div>
					<div class="col-sm-6"><input type="password" name="new_password"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 inp-label">Confirm Password</div>
					<div class="col-sm-6"><input type="password" name="confirm_password"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 inp-label"></div>
					<div class="col-sm-6"><div class="submitpass"><input type="submit" class="btn" name="" value="Change Password"></div></div>
				</div>
						
			</div>
		</div>
		</form>
	</div>
</div>

<script>

	$('.submitpass').click(()=>{
		show_preloader();
		var json = form2json("#password_form");
		if ($('input[name="new_password"]').val() == $('input[name="confirm_password"]').val())
		{
			$.ajax({
				async: false,
				url: "update/change_password.php",
				method: "post",
				data: {data: json},
				success: function (res){
					console.log(json);
					if (res == "success")
					{
						$('.page_content').load("change_password.php", ()=>{hide_preloader();});
						hide_preloader();
						M.toast({html: 'Updated Successfully'});
					}
					else if (res == "wrong_current_password")
					{
						hide_preloader();
						M.toast({html: 'You have given wrong current password.'});
					}
					else if (res == "failed")
					{
						// hide_preloader();
						$('.page_content').load("change_password.php", ()=>{hide_preloader();});

						M.toast({html: 'Updation failed!<br>There may be a technical problem.<br>Please contact the adminstrator.'});
					}
				}
			});
		}
		else
		{
			hide_preloader();
			M.toast({html: 'New password and Confirm password doesn\'t match.'});
		}

		return false;
	});
</script>