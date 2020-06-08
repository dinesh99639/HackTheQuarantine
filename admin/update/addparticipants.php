<style type="text/css">
	
</style>


<div class="addparticipants">
	<form method="POST" enctype="multipart/form-data" id="fileUploadForm">
		<div class="container">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-5">
					<div class="file-field input-field">
						<div class="btn">
							<span>File</span>
							<input type="file" name="file">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-5">
	    			<input type="submit" name="add_p_submit" value="Add Participants" class="add_participants_btn btn"/>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3"></div>
				<div style="margin-left: 15px; margin-top: 30px;" class="col-sm-5" align="center">
					<div class="participants_inserted"></div>
				</div>
			</div>
		</div>
	</form>
</div>

<script>
	$(".add_participants_btn").click(function (event) {
        event.preventDefault();
		show_preloader();

        var form = $('#fileUploadForm')[0];
        var data = new FormData(form);

        $(".add_participants_btn").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "update/add_participants_process.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
            	if (data == "failed")
            	{
                	$(".add_participants_btn").prop("disabled", false);
            		hide_preloader();
            		M.toast({html: 'Updation failed!<br>There may be a technical problem.<br>Please contact the adminstrator.'});
            	}
            	else
            	{
                	$(".add_participants_btn").prop("disabled", false);
                	$('.participants_inserted').text("Participants added : "+data);
                	hide_preloader();
					M.toast({html: 'Updated Successfully'});
            	}
            },
            error: function (e) {
                console.log("ERROR : ", e);
                $(".add_participants_btn").prop("disabled", false);
            }
        });

    });
</script>