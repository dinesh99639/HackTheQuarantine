<?php
session_start();
require ("../../db.php");

$uid = $_SESSION['userid'];

$round = 3;
$released = 0;

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
</style>

<div class="round">
	<div class="round_title">Round 3</div>
	<div class="round_content">
		<!-- <div class="round_head">Instructions</div> -->
		<?php if ($qualified || $released) { ?>
			<?php if (($controls->round3->sample==0) && ($controls->round3->original==0)) { ?>
			<div class="round_details">
				<div align="center" style="">The format of this round will be released approximately one hour before the contest.</div>
				<div align="center"></div>
			</div>
			<?php } ?>

			<?php if ($controls->round3->sample==1) { ?>

			<!-- Sample Test Link -->

			<div class="round_head">Instructions</div>
			<div class="round_details">
				<ul>
					<li>This is a conding contest.</li>
					<li>You have _ minutes to complete the contest from the time of clicking the below button.</li>
					<!-- <li>Click the button and attempt the sample quiz.</li> -->
				</ul>
			</div>
			<div class="quiz" align="center">
				<!-- <a href="https://www.google.com" target="_blank"><button class="btn">Go to Quiz</button></a> -->
			</div>

			<?php } else if ($controls->round3->original==1) { ?>

			<!-- Original Test Link -->

			<div class="round_head">Instructions</div>
			<div class="round_details">
				<ul>
					<li>This is a conding contest.</li>
					<li>You have 3 hours to complete the contest from the time of clicking the below button.</li>
					<!-- <li>Click the button and attempt the sample quiz.</li> -->
				</ul>
			</div>
			<div class="quiz" align="center">
				<a href="https://www.google.com" target="_blank"><button class="btn">Go to Contest</button></a>
			</div>

			<?php } ?>
		<?php } else { ?>
			<div align="center" style="color: red!important;">You can't attempt this round because you have been disqualified in one of the previous rounds.</div>
	<?php } ?>
	</div>
</div>