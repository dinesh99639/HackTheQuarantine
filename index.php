<!DOCTYPE html>
<html>
<head>
	<title>HackTheQuarantine</title>

	<!-- <link rel="shortcut icon" href="//www.google.com/favicon.ico"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

	<link rel="stylesheet" href="static/bootstrap/bootstrap.min.css">
	<script src="static/bootstrap/jquery-3.5.1.min.js"></script>
	<script src="static/bootstrap/popper.min.js"></script>
	<script src="static/bootstrap/bootstrap.min.js"></script>

	<!-- <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">


	<style type="text/css">
		*
		{
			/*font-size: 20px;*/
			/*line-height: 1.15;*/
			/*font-family: Times New Roman;*/
			/*font-family: 'Rancho', cursive;*/
			/*font-family: 'Domine', serif;*/
			/*font-family: 'Courgette', cursive;*/
			font-family: 'Alice', serif;
		}
		body
		{
			margin: 0;
		}
		.header
		{
			background: #232526;
			background: -webkit-linear-gradient(to right, #414345, #232526);
			background: linear-gradient(to right, #414345, #232526);

			background: #4776E6;
			background: -webkit-linear-gradient(to right, #8E54E9, #4776E6);
			background: linear-gradient(to right, #8E54E9, #4776E6);


			color: white;
			height: 300px;
		}
		.header .logo
		{
			text-align: center;
			font-size: 50px;
			padding-top: 60px;
		}
		.quote
		{
			text-align: center;
			font-size: 20px;
			line-height: 20px;
		}
		.timeleft-desc
		{
			text-align: center;
			font-size: 25px;
			margin-top: 10px;
		}
		.timeleft
		{
			text-align: center;
			font-size: 20px;
			/*margin-top: 10px;*/
		}
		.about
		{
			margin-top: 40px;
		}
		.login
		{
			border: 1px solid rgba(0, 0, 0, 0.3);
			border-radius: 5px;
			height: 450px;
			width: 350px;
		}
		.login .label
		{
			text-align: center;
			font-size: 25px;
			margin-top: 20px;
			font-weight: bold;
		}
		.usericon
		{
			text-align: center;
			margin-top: 20px;
		}
		.usericon img
		{
			width: 150px;
		}
		.form-row
		{
			/*margin-top: 20px;*/
			/*text-align: center;*/
			/*width: 100%;*/
		}
		.loginform
		{
			margin: 20px 20px 0 20px;
		}
		.loginform input
		{
			margin: 10px 20px 0 0;
			text-align: center;
		}
		.loginsubmit
		{
			text-align: center;
			vertical-align: middle;
			left: 50%;

		}


		.details
		{

		}
		.details .content
		{
			margin-top: 30px;
		}
		.details .content li
		{
			font-size: 18px;
		}

		.prizes .content
		{
			margin-top: 30px;
		}
		.prizes .content li
		{
			font-size: 18px;
		}


		.schedule
		{
			text-align: center;
			background-color: lightgray;
			margin-top: 20px;
			padding: 30px;
		}
		.schedule h4
		{
			color: gray;
			margin: 0;
			/*text-align: left;*/
		}


		.eligibility
		{
			margin-top: 20px;

		}
		.eligibility .content
		{
			margin-top: 20px;
			font-size: 20px; 
		}
		h2
		{
			text-align: center;
			margin-top: 30px;
			/*color: #4776E6;*/
			color: rgba(0, 0, 0, 0.7);
		}

		.footer
		{
			height: 200px;
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="logo">HackTheQuarantine</div>
		<div class="quote">Compete - Code - Win</div>
		<div class="quote">Be the only one</div>
	</div>
	<div class="body">
		<div class="time">
			<div class="timeleft-desc">The contest starts in</div>
			<div class="timeleft" id="timeleft">655</div>
		</div>
		<div class="about">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="details">
							<h2>Details</h2>
							<div class="content">
								<ul>
									<li>The Hackathon consists of totally 4 levels.</li>
									<li>Every level is of different pattern and the pattern will be revealed before 1 hr of the level.</li>
									<li>Last Date for Registration : 7th June 2020</li>
									<!-- <li></li>	 -->
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="login">
							<div class="label">Login</div>
							<div class="usericon"><img src="user.png"></div>
							<form class="loginform" method="post" action="login/auth.php">
								<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="Enter email">
									<input type="password" class="form-control" name="password" placeholder="Enter password">
									<div class="loginsubmit">
										<div class="row">
											<div class="col-sm-4"></div>
											<div class="col-sm-4">
												<input type="submit" class="form-control btn-primary" value="Login">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h2 align="center">Schedule</h2>
		<div class="schedule">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="start" style="border-right: 1px solid;">
							<h4>Starts on</h4>
							<h3>June 8th, 2020</h3>
						</div>
					</div>
					<div class="col-sm-4">
						<h4>Phase</h4>
						<h3>Online</h3>
					</div>
					<div class="col-sm-4">
						<div class="end" style="border-left: 1px solid;">
							<h4>Ends on</h4>
							<h3>June 15th, 2020</h3>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="eligibility">
			<h2 align="center">Eligibility</h2>
			<div class="container">
				<div class="row content">
					<ul>
						<li>Students from any domain can participate and win!!</li>
						<li>Applicable for every student pursuing their bachelor's degree, except the final years.</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="prizes">
			<h2 align="center">Prizes</h2>
			<div class="container">
				<div class="row content">
					<ul>
						<li>The contestants who stand in 1st, 2nd and 3rd positions are awarded with cash prize along with merit certificates.</li>
						<li>The contestants who have reached level 2, 3 and 4 are given diffenent type of certificates depending upon the level they reach.</li>
						<li>The other contestants will recieve participation certificates.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer"></div>

	<script>

	    var day   = 8;
	    var month = 6;
	    var year  = 2020;

	    var contestdate = year + " " + month + " " + day;
	    var contestdate = new Date(contestdate); 
		var today = new Date();
		
		function cal_time()
		{
			var str = "";
			var today = new Date();

		    var total = contestdate - today;

		    milliseconds = total % 1000;
		    total = (total - (milliseconds)) / 1000;

		    seconds = total % 60;
		    total = (total - seconds) / 60;

		    minutes = total % 60;
		    total = (total - minutes) / 60;

		    hours = total % 24;
		    days = (total - hours) / 24;

		    if (days==0 && minutes==0 && hours==0 && seconds==0) window.location.href="";

		    document.getElementById("timeleft").innerHTML = days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds";
		}

		if ((contestdate - today)>0)
		{
			cal_time();

			var update_time = setInterval(()=>{
				cal_time();
			}, 500);
		}
		else
		{
			document.getElementById("timeleft").innerHTML = "Contest started on "+day+"-"+month+"-"+year;
		}


		// $('.loginform').preventDefault();
		// var login = ()=>{
		// 	var email = $('#email').val();
		// 	var password = $('#password').val();
		// 	console.log(email);
		// 	console.log(password);
		// };
		// $('.loginform').submit(function(e){
		// 	var email = $('#email').val();
		// 	var password = $('#password').val();
		//     e.preventDefault();

		//     $.ajax({
		//         url:'login/auth.php',
		//         type:'post',
		//         data: {email: email, password: password},
		//         success:function(data){
		//         	console.log(data);
		//             //whatever you wanna do after the form is successfully submitted
		//         }
		//     });
		// });
	</script>
</body>
</html>

<?php

if (isset($_GET['error']))
{
	if ($_GET['error']=="login_fail")
	{
		?><script>alert("Invalid Login credentials.");</script><?php
	}
}

?>