<?php

session_start();
require ("../../db.php");

$uid = $_SESSION['userid'];
// echo md5(uniqid(rand(), true));
$round = 2;
$released = 0;

$pages = '
{
	"q1": "round2/1sfw3rfrawavsdfvdfgavfweravr33wvrwevvwefvwaevf1.html",
	"q2": "round2/2sahdsahd87ashduiwauduhwuih2iuhw2uhciuqcnai.html",
	"q3": "round2/3sadhas87dch87c2yn78qyc8oydq7oaqcowgbewfafbaveflw7bf78vb8wwv7y.html",
	"q4": "round2/4sdfh87shfe7nvwvnyYN8Y87gnhifhvlsihlvlevsfgvyuegvbugs.html",
	"q5": "round2/5sbdduiew877d87gfahog87gfvn7aav72r8nevsev.html",
	"q6": "round2/6sdfs67ftvweavki7tiwsfvwslvsfyiwfvwesewvf.html",
	"q7": "round2/7asihndvas8dyv8ewyo84yvo8syoe87tv8eryno8vy7e.html",
	"q8": "round2/8sdvj8o7yvo47888hyoevse7rtyo8v7esevhyosevh8r.html",
	"q9": "round2/9.html"

}';
$pages = json_decode($pages);


$controls = file_get_contents("controls.json");
$controls = json_decode($controls);

// Qualified

$qry = "SELECT * from users where userid='$uid' ";
$res = mysqli_query($db, $qry);
$row = mysqli_fetch_assoc($res);

$qualified = 1;
$passed = 0;
for ($i=1; $i<=4; $i++)
{
	if ($row["round".$i.""]==-1) $qualified = 0;
	else $passed += $row["round".$i.""]; 
}
if ($qualified == 0)
{
	if ($round <= $passed) $qualified = 1;
}

// 



$page = "instructions";
if (isset($_GET['page'])) $page = $_GET['page'];

// $controls->round1->sample = 10;
// $file = json_encode($controls);
// fwrite(fopen("controls.json", "w"), $file);
$qry = "SELECT * FROM round2 where userid='$uid' ";
$res = mysqli_query($db, $qry);
$row = mysqli_fetch_assoc($res);

$unlocked = 0;
if ($page != "instructions") $unlocked = $row[$page];


?>

<style type="text/css">
	.round
	{
		margin-top: 10px;
	}
	.round_title
	{
		text-align: center;
		font-size: 30px;
	}
	.round_content
	{
		margin-top: 20PX;
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

	.quiz
	{
		margin-top: 50px;
	}

	.qnav
	{
		margin-bottom: 20px;
	}
	.question
	{
		border-radius: 20px;
		margin-right: 30px;
		margin-top: 10px;
	}

	.unlock
	{
		margin-top: 20px;
	}
</style>

<div class="round">
	<div class="qnav">
	<?php if ($qualified || $released) { ?>
		<?php if (($controls->round2->sample==1) || ($controls->round2->original==1)) { ?>
			<div class="question btn" id="instructions">Instructions</div>
			<div class="question btn" id="q1">Page 1</div>
			<div class="question btn" id="q2">Page 2</div>
			<div class="question btn" id="q3">Page 3</div>
			<div class="question btn" id="q4">Page 4</div>
			<div class="question btn" id="q5">Page 5</div>
			<div class="question btn" id="q6">Page 6</div>
			<div class="question btn" id="q7">Page 7</div>
			<div class="question btn" id="q8">Page 8</div>
			<div class="question btn" id="q9">Page 9</div>
		<?php } ?>
	<?php } ?>
	</div>
	<div class="round_title">Round 2</div>
	<div class="round_content">
		<!-- <div class="round_head">Instructions</div> -->
		<?php if ($qualified || $released) { ?>
		<?php if ($page == "instructions") { ?>

			<?php if (($controls->round2->sample==0) && ($controls->round2->original==0)) { ?>
			<div class="round_details">
				<div align="center" style="">The format of this round will be released approximately one hour before the contest.</div>
				<div align="center"></div>
			</div>
			<?php } ?>

			<?php if ($controls->round2->sample==1) { ?>

			<!-- Sample Test Link -->

			<div class="round_head">Instructions</div>
			<div class="round_details">
				<ul>
					<li>This is a Catch the flag (CTF) round.</li>
					<li>You have 2hrs to complete the challenge.</li>
					<li>You can switch between Instructions and Questions by selecting the desired option in above navbar.</li>
					<li>In this round, you have to open the website in "page 1" and ckick on "Go to page" button (available during contest time).</li>
					<li>Then find the key hidden in that page. It is the unlock key to the next page.</li>
					<li>Once you found the key, goto next question and enter the found key in the input field and click unlock to unlock that question.</li>
					<li>Once the contest starts, goto the Page 1 and find the key to unlock page 2 link. It is similar to the other pages too.</li>
					<li>Click the button and watch the video of sample CTF.</li>
				</ul>
			</div>
			<div class="quiz" align="center">
				<a href="https://www.google.com" target="_blank"><button class="btn">Sample Video</button></a>
			</div>

			<?php } else if ($controls->round2->original==1) { ?>

			<!-- Original Test Link -->

			<div class="round_head">Instructions</div>
			<div class="round_details">
				<ul>
					<li>This is a Catch the flag (CTF) round.</li>
					<li>You have 2hrs to complete the challenge.</li>
					<li>You can switch between Instructions and Questions by selecting the desired option in above navbar.</li>
					<li>In this round, you have to open the website by clicking the below button and find the key hidden in the website.</li>
					<li>And then verify the found key in the space provided in the input field provided below each CTF question.</li>
					<li>Click the button and watch the video of sample CTF.</li>
				</ul>
			</div>
			<div class="quiz" align="center">
				<!-- <a href="https://www.google.com" target="_blank"><button class="btn">Go to Page</button></a> -->
			</div>

			<?php } ?>

		<?php } 
		else 
		{
			$page_name = $page;
			$page = substr($page, 1); ?>

			<div align="center" class="round_head">Page <?php echo $page; ?></div>
			<?php if ($controls->round2->original==0) { ?> 
			<div class="round_details">
				<div align="center" style="">This page will be unlocked at the time of contest.</div>
				<div align="center"></div>
			</div>
			<?php } else { ?>
				<?php if (!$unlocked) { ?>
					<div class="unlock" style="margin-left: 40px;">
						<div class="col s3"></div>
						<div class="input-field col s4">
							<input id="input_text" class="page_key" type="text">
							<label for="input_text">Place your key here</label>
						</div>
						<div class="input-field col s3">
							<button class="btn unlock_btn">Unlock</button>
						</div>
					</div>
				<?php } else { ?>
					<div align="center" class="unlock">
						<a href="rounds/<?php echo $pages->$page_name; ?>" target="_blank"><button class="btn">Go to Page <?php echo $page; ?></button></a>
					</div>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	<?php } else { ?>
		<div align="center" style="color: red!important;">You can't attempt this round because you have been disqualified in one of the previous rounds.</div>
	<?php } ?>
	</div>
</div>

<script>

	var active_ques = "";
	$('.question').click(function(event)
	{
		if ($(this).attr("id")!=active_ques)
		{
			show_preloader();
	        // $('.active_ques').removeClass('active_ques');
	        // $(this).addClass('active_ques');
			active_ques = $(this).attr("id");
			localStorage.setItem("r2q", active_ques);
			// console.log(active_ques);
			$('.page_content').load("rounds/round2.php?page="+active_ques, ()=>{hide_preloader();});
			// if (active_ques=="dashboard")
			// {
			// 	$('.page_content').load(active_ques+".php", ()=>{hide_preloader();});
			// 	localStorage.setItem("page", active_ques);
			// 	localStorage.setItem("sidebar_item", active_ques);
			// }
			// else
			// {
			// 	$('.page_content').load("rounds/"+active_ques+".php", ()=>{hide_preloader();});
			// 	localStorage.setItem("page", "rounds/"+active_ques);
			// 	localStorage.setItem("sidebar_item", active_ques);
			// }
		}
	});

	$('.unlock_btn').click(()=>{
		show_preloader();
		var page = localStorage.getItem("r2q");
		var key = $('.page_key').val();

		$.ajax({
			async: false,
			method: "post",
			url: "rounds/round2/validate.php",
			data: {page: page, key: key},
			success: function (res) {
				if (res == "success")
				{
					M.toast({html: 'Unlocked Successfully'});
					$('.page_content').load("rounds/round2.php?page="+page, ()=>{hide_preloader();});
				}
				else if (res == "invalid_key")
				{
					$('.page_key').val("");
					M.toast({html: 'Invalid Key.<br>Try again!'});
					hide_preloader();
				}
				else if (res == "failed")
				{
					hide_preloader();
					M.toast({html: 'Updation failed!<br>There may be a technical problem.<br>Please contact the adminstrator.'});
				}
			}
		});
	});
</script>