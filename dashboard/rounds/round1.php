<?php

session_start();
require ("../../db.php");

$controls = file_get_contents("controls.json");
$controls = json_decode($controls);

$round = 1;
$released = 0;

// $cr = 0;
// if ($controls->round1->original==1) $cr+=1;
// if ($controls->round2->original==1) $cr+=1;
// if ($controls->round3->original==1) $cr+=1;
// if ($controls->round4->original==1) $cr+=1;

$uid = $_SESSION['userid'];

$qry = "SELECT * from users where userid= '$uid' ";
$res = mysqli_query($db, $qry);
$row = mysqli_fetch_assoc($res);

// Qualified

// $cr = 0;
// if ($controls->round1->original==1) $cr+=1;
// if ($controls->round2->original==1) $cr+=1;
// if ($controls->round3->original==1) $cr+=1;
// if ($controls->round4->original==1) $cr+=1;

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

// $controls->round1->sample = 10;
// $file = json_encode($controls);
// fwrite(fopen("controls.json", "w"), $file);

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
	<div class="round_title">Round 1</div>
	<div class="round_content">
		<!-- <div class="round_head">Instructions</div> -->
		<?php if ($qualified || $released) { ?>
			<?php if (($controls->round1->sample==0) && ($controls->round1->original==0)) { ?>
			<div class="round_details">
				<div align="center" style="">The format of this round will be released approximately one hour before the contest.</div>
				<div align="center"></div>
			</div>
			<?php } ?>

			<?php if ($controls->round1->sample==1) { ?>

			<!-- Sample Test Link -->

			<div class="round_head">Instructions</div>
			<div class="round_details">
				<ul>
					<li>The 1st level's pattern is a quiz with 25 questions with 25 minutes duration.</li>
					<li>Every question is for 4 marks and the total score is 100.</li>
					<li>Every participant has quiz alloted only to the mail they had submitted.</li>
					<li>The platform is Google Forms.</li>
					<li>Plagarism detection has been implemented and if someone is into plagarism, they will be automatically disqualified from the contest, and even will not be provided with a certificate.</li>
					<li>Slot-1 : 10 AM to 10:40 AM</li>
					<li>Slot-2 : 4 PM to 4:40 PM</li>
					<!-- <li>Click the button and attempt the sample quiz.</li> -->
				</ul>
			</div>
			<div class="quiz" align="center">
				<!-- <a href="https://www.google.com" target="_blank"><button class="btn">Go to Quiz</button></a> -->
			</div>

			<?php } else if ($controls->round1->original==1) { ?>

			<!-- Original Test Link -->

			<div class="round_head">Instructions</div>
			<div class="round_details">
				<ul>
					<li>The 1st level's pattern is a quiz with 25 questions with 25 minutes duration.</li>
					<li>Every question is for 4 marks and the total score is 100.</li>
					<li>Every participant has quiz alloted only to the mail they had submitted.</li>
					<li>The platform is Google Forms.</li>
					<li>Plagarism detection has been implemented and if someone is into plagarism, they will be automatically disqualified from the contest, and even will not be provided with a certificate.</li>
					<li>Slot-1 : 10 AM to 10:40 AM</li>
					<li>Slot-2 : 4 PM to 4:40 PM</li>
					<!-- <li>Click the button and attempt the quiz.</li> -->
				</ul>
			</div>
			<div class="quiz" align="center">
				<!-- <a href="https://www.google.com" target="_blank"><button class="btn">Go to Quiz</button></a> -->
			</div>

			<?php } ?>

		<?php } else { ?>
			<div align="center" style="color: red!important;">You can't attempt this round because you have been disqualified in one of the previous rounds.</div>
		<?php } ?>
	</div>
</div>