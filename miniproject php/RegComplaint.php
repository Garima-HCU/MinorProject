<?php
session_start();
include("functions.php");
include("connection.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
	var_dump($_POST);
	$studentID=$_POST['studentID'];
	$password=$_POST['password'];
	$_SESSION['gstudentID']=$_POST['studentID'];
	if(!empty($studentID) && !empty($password))
	{
		$query="select *  from Hostel_guide where student_id = '$studentID' limit 1";
		$result=mysqli_query($con,$query);
		if($result && mysqli_num_rows($result)>0)
		{
			$student_data=mysqli_fetch_assoc($result);
			if($student_data['Password']==$password)
			{
				//echo 'hi there';
					$_SESSION['studentID'] = $student_data['student_id'];
					header('Location: logged_In.php');
					
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


<!DOCTYPE html>
<html>

<head>
    <title>Register Complaint</title>
    <link rel="stylesheet" href="RegComplaint.css" />
</head>

<body>


<form method="post">
		<!-- <p>Login Page</p> -->
		<?php
		if(isset($error))
		{
			foreach($error as $error)
			{
				echo $error;
			};
		};
		?>
    <div id="container">
        <div id="header">
       
        <span id="heading"><h1>STUDENT'S HOSTEL GUIDE</h1></span>
</div>
     </div>
    
    <div class="topnav">
        <a href="home.php">HOME</a>
		<!-- <a href="RegComplaint.php">REGISTER COMPLAINTS</a> -->
        <a href="RegComplaint.php">STUDENT COMPLAINTS</a>
        <!-- <a href="admin.php">ADMIN</a> -->
        
    </div>
    <div id="container1">
        <div id="header1"><h1><b>Login</b></h1></div>
		<form method="post" class="form">
			<div class="input_group">
				<label>Student ID : </label>
				<input type="text" name="studentID" placeholder="Enter student ID">
			</div>
			<div class="input_group">
				<label>Password : </label>
				<input type="password" name="password" placeholder="Enter Password">
			</div>
			<div class="input_group">
				<button type="submit" onclick="window.location.href = 'logged_In.html';">LOGIN</button>
			</div>
			<div class="input_group">
				<label>Not yet registered? </label>
				<a href="signup_form.php">Sign Up</a>
			
			</div>
		</form>
    </div>
  
</body>

</html>