<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<!-- <link rel="shortcut icon" href="//www.google.com/favicon.ico"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

	<link rel="stylesheet" href="../static/bootstrap/bootstrap.min.css">
	<script src="../static/bootstrap/jquery-3.5.1.min.js"></script>
	<script src="../static/bootstrap/popper.min.js"></script>
	<script src="../static/bootstrap/bootstrap.min.js"></script>

	 <!-- Materialsise CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<!-- <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">


	<script>
		function show_preloader() {$('.preloader').fadeIn();}
		function hide_preloader() {$('.preloader').fadeOut();}


		function form2json(element)
		{
			var s = $(element).serialize();
			s = s.replace(/=/g, '\":\"');
			s = s.replace(/&/g, '\",\"');
			
			s = '{\"'+s+'\"}';

			return decodeURIComponent(s);
		}
		
	</script>

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
			height: 100%;
		}

		.preloader
		{
			position: absolute;
			background-color: rgba(0, 0, 0, 0.5);
			height: 100%;
			width: 100%;
			z-index: 1000;
		}

		.header
		{
			background: #4776E6;
			background: -webkit-linear-gradient(to right, #8E54E9, #4776E6);
			background: linear-gradient(to right, #8E54E9, #4776E6);


			color: white;
			height: 50px;
			z-index: 100;
		}
		.header .title
		{
			font-size: 30px;
			padding-top: 7px;
			padding-left: 20px;
			/*text-align: center;*/
		}
		.header .name
		{
			position: absolute;
			font-size: 20px;
			top: 13px;
			right: 50px;
		}
		.name img
		{
			width: 20px;
			margin-left: 10px;
			cursor: pointer;
		}

		.sidebar
		{
			position: fixed;
			height: 100%;
			width: 22%;
			border-right: 1px solid rgba(0, 0, 0, 0.3);
			text-align: center;
		}
		.sidebar ul
		{
			margin-top: 20px;
		}
		.sidebar li
		{
			padding: 10px;
			text-decoration: none;
			cursor: pointer;
		}
		.sidebar li:hover
		{
			background: #4776E6;
			background: -webkit-linear-gradient(to right, #8E54E9, #4776E6);
			background: linear-gradient(to right, #8E54E9, #4776E6);
			color: white;
		}
		.active_tab
		{
			background: #4776E6;
			background: -webkit-linear-gradient(to right, #8E54E9, #4776E6);
			background: linear-gradient(to right, #8E54E9, #4776E6);
			color: white;
		}
		.loading
		{
			position: absolute;
			top: 50%;
			left: 50%;
			/*transform: translate(-50%, -50%);*/
		}

		.page_right_content
		{
			position: fixed;
			height: calc(100% - 50px);;
			left: 25%;
			overflow-y: auto;
		}
		.page_content
		{

		}
		.jumbotron
		{
			/*margin: 0;*/
			/*margin: 0 10px 0 0;*/
		}
	</style>
</head>
<body>
	<div class="preloader">
		<div class="preloader-wrapper small active loading">
			<div class="spinner-layer spinner-blue-only">
				<div class="circle-clipper left"><div class="circle"></div></div>
				<div class="gap-patch"><div class="circle"></div></div>
				<div class="circle-clipper right"><div class="circle"></div></div>
			</div>
		</div>
	</div>

	<div class="header">
		<div class="title">HackTheQuarantine</div>
		<div class="name"><?php echo $_SESSION['name']; ?> <a class='dropdown-trigger' href='#' data-target='dropdown1'><img src="../icons/settings.png"></a></div>
		<!-- Dropdown Structure -->
		<ul id='dropdown1' class='dropdown-content' style="min-width: 170px;">
			<li><a id="profile">Profile</a></li>
			<li><a id="chng_pswd">Change Password</a></li>
			<li><a id="logout">Logout</a></li>
		</ul>
	</div>
	<div class="body">
		<div class="container-fluid" style="padding: 0">
			<div class="row">
				<div class="col-sm-3" style="padding: 0;">
					<div class="sidebar">
						<ul>
							<li id="dashboard" class="sidebar_item">Dashboard</li>
							<li id="round1" class="sidebar_item">Round 1</li>
							<li id="round2" class="sidebar_item">Round 2</li>
							<li id="round3" class="sidebar_item">Round 3</li>
							<li id="round4" class="sidebar_item">Round 4</li>
						</ul>
					</div>
				</div>
				<!-- <div class="col-sm-9 page_right_content jumbotron" style="padding-right: 3%;"> -->
				<div class="col-sm-9 page_right_content" style="padding-right: 3%;">
					<div class="page_content"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script>
$(document).ready(()=>{

	

	$('.dropdown-trigger').dropdown({
		inDuration: 300,
		outDuration: 225,
		coverTrigger: false,
		constrain_width: false, // Does not change width of dropdown to that of the activator
		click: true, // Activate on click
		gutter: 0, // Spacing from edge
		belowOrigin: true, // Displays dropdown below the button
		alignment: 'left' // Displays dropdown with edge aligned to the left of button
	});

	// $('.page_content').load("dashboard.php");

	// localStorage.removeItem("page");

	// Refreshing the page
	if (localStorage.getItem("page")==null) 
	{
		// show_preloader();
		localStorage.setItem("page", "dashboard");
		$('.page_content').load("dashboard.php", ()=>{hide_preloader();});
		$("#"+localStorage.getItem("sidebar_item")).addClass('active_tab');
	}
	else
	{
		// show_preloader();
		$('.page_content').load(localStorage.getItem("page")+".php", ()=>{hide_preloader();});
		$('.active_tab').removeClass('active_tab');
		$("#"+localStorage.getItem("sidebar_item")).addClass('active_tab');
	}


	var active_tab = localStorage.getItem("sidebar_item");
	$('.sidebar_item').click(function(event)
	{
		if ($(this).attr("id")!=active_tab)
		{
			show_preloader();
	        $('.active_tab').removeClass('active_tab');
	        $(this).addClass('active_tab');
			active_tab = $('.active_tab').attr("id");
			
			if (active_tab=="dashboard")
			{
				$('.page_content').load(active_tab+".php", ()=>{hide_preloader();});
				localStorage.setItem("page", active_tab);
				localStorage.setItem("sidebar_item", active_tab);
			}
			else
			{
				$('.page_content').load("rounds/"+active_tab+".php", ()=>{hide_preloader();});
				localStorage.setItem("page", "rounds/"+active_tab);
				localStorage.setItem("sidebar_item", active_tab);
			}
		}
        // event.preventDefault();
    });

    $('#profile').click(function(event) {
		show_preloader();
    	$('.page_content').load("profile.php", ()=>{hide_preloader();});
		localStorage.setItem("page", "profile");
		$('.active_tab').removeClass('active_tab');
		active_tab = "";
    });

    $('#chng_pswd').click(function(event) {
		show_preloader();
    	$('.page_content').load("change_password.php", ()=>{hide_preloader();});
		localStorage.setItem("page", "change_password");
		$('.active_tab').removeClass('active_tab');
		active_tab = "";
    });

    $('#logout').click(function(event) {
    	localStorage.removeItem("page");
    	window.location.href="../login/logout.php";
    });



     

	

});

</script>