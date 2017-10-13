<?php
if (isset($_POST['spanish']))
{
	require_once("home/spanish_homepage.php");
}
else{
	require_once("home/homepage.php");
}
?>