<?php
$dbhost="localhost";
$dbuser="root";
$dbpwd="";
$dbname="users";
if(!$con=mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname))
{
	die("Failed to connect with the database!");
}

?>