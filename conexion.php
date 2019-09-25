<?php
	$link = mysqli_connect("localhost","root","S1st3m4s2016","comunidad") or die("Error.. " . mysqli_error($link));
	$query="SET NAMES 'utf8'";
	$link->query($query);
?>