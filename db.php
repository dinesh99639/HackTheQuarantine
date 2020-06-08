<?php
$server = 0;

if ($server==0) $db = mysqli_connect("localhost","root","","hackthequarantine") or die("Could not connect");
else $db = mysqli_connect("sql303.epizy.com","epiz_25927744","wDX6RhdQ6r4phnb","epiz_25927744_hackthequarantine	") or die("Could not connect");
?>