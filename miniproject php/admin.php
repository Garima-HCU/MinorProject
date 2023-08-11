<?php
session_start();
include("functions.php");
include("connection.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$adminID=$_POST['adminID'];
	$password=$_POST['password'];
	if(!empty($adminID) && !empty($password))
	{
		$query="select * from Hostel_guide where student_id = '$adminID' limit 1";
		$result=mysqli_query($con,$query);
		if($result && mysqli_num_rows($result)>0)
		{
			$student_data=mysqli_fetch_assoc($result);
			if($student_data['Password']== $password)
			{
				
					$_SESSION['studentID'] = $student_data['student_id'];
					header('Location: admin_login.php');
			}
			else
			{
				$error[]="Wrong Password!";
			}
		}
		else
		{
			$error[]="No user exists with this student id.";
		}
	}
	else
	{
		$error[]="Enter all the details.";
	}
}
?>




<html>

<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="RegComplaint.css" />
</head>

<body>
    <div id="container">
        <div id="header">
       
        <span id="heading"><h1>STUDENT'S HOSTEL GUIDE</h1></span>
</div>
     </div>
    <div class="topnav">
        <a href="home.php">HOME</a>
        <!-- <a href="RegComplaint.php">REGISTER COMPLAINTS</a> -->
        <a href="admin.php">ADMIN</a>
       
    </div>
    <div id="container1">
		<form method="post">

			<div id="header1"><h1><b>Admin Login</b></h1></div>
			<div class="input_group">
				<label>Admin ID : </label>
				<input type="text" name="adminID" placeholder="Admin ID">
			</div>
			<div class="input_group">
				<label>Password : </label>
				<input type="password" name="password" placeholder="Password">
			</div>
			<div class="input_group">
				<button type="submit">LOGIN</button>
			</div>
		</form>
       
    </div>
</body>

</html>