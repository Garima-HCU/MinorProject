<?php
session_start();
if(isset($_SESSION['Student_id']))
{
	unset($_SESSION['Student_id']);
}
header('Location: home.php');
die;
?>