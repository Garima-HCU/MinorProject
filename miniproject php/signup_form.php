<?php
session_start();
include("connection.php");
var_dump($_POST);
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y');
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=$_POST['name'];
	$id=$_POST['id'];
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$compl_type=$_POST['complaint_type'];
	$hostel=$_POST['hostel'];
	$date=$_POST['date'];
	$room=$_POST['room'];
	$complaint = $_POST['complaint'];


	$query="select * from Hostel_guide where student_id = '$id'";
	$result=mysqli_query($con,$query);//function use to run query

	if(mysqli_num_rows($result)>0) //already exist user
	{
		$error[]="User already exists with this id.";
	}
	else //new user
	{
		if( !(empty($name) && !empty($id) && !empty($pass1) && !empty($pass2) && !empty($email)  && !empty($mobile) && !empty($user_type)   && !empty($hostel) && !empty($room) && !empty($date))  )
		{
			if($pass1==$pass2)
			{
				$query_insert="insert into Hostel_guide values ('$name','$id','$email','$pass1','$mobile','$hostel','$room','$date','$compl_type','$complaint')";
				mysqli_query($con,$query_insert);
				header('Location: RegComplaint.php');
			}
			else
			{
				$error[]="Password not macthed.";
			}
		}
		else
		{
			$error[]="Enter all the details.";
		}
	}
}
?>


<!Doctype html>
<html>

<head>
	<title>complaint form</title>
	<link rel="stylesheet" href="signup_form.css">
	
</head>

<body>
	<form method="post">
		<?php
		if(isset($error))
		{
			foreach($error as $error)
			{
				echo $error;
			};
		};
		?>

		<div class="topnav">
			<a href="home.php">HOME</a>
			<a href="RegComplaint.php">REGISTER COMPLAINTS</a>
			

		</div><br><br>

		<script>

			function upperCase() {
				const x = document.getElementById("name");
				x.value = x.value.toUpperCase();
			}
			function validateForm() {  
    //collect form data in JavaScript variables  
    var pw1 = document.getElementById("pass1").value;  
    var pw2 = document.getElementById("pass2").value;  
    var name = document.getElementById("name").value;  
     
      
    //check empty first name field  
    if(name == "") {  
      document.getElementById("blankMsg").innerHTML = "**Fill the first name";  
      return false;  
    }  
      
    //character data validation  
    if(!isNaN(name)){  
      document.getElementById("blankMsg").innerHTML = "**Only characters are allowed";  
      return false;  
    }  
  
  
    
    //check empty password field  
    if(pw1 == "") {  
      document.getElementById("message1").innerHTML = "**Fill the password please!";  
      return false;  
    }  
    
    //check empty confirm password field  
    if(pw2 == "") {  
      document.getElementById("message2").innerHTML = "**Enter the password please!";  
      return false;  
    }   
     
    //minimum password length validation  
    if(pw1.length < 8) {  
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";  
      return false;  
    }  
  
    //maximum length of password validation  
    if(pw1.length > 15) {  
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";  
      return false;  
    }  
    
    if(pw1 != pw2) {  
      document.getElementById("message2").innerHTML = "**Passwords are not same";  
      return false;  
    } else {  
      alert ("Thanks for signing up");  
      document.write("JavaScript form has been submitted successfully");  
    }  
 }  
			

		</script>


		<div id="div2">

			<h2 style="color:rgb(32, 74, 125);">COMPLAINT REGISTER </h2>


			<form onsubmit="return validateForm()">
				<b><label for="name">STUDENT NAME:</label></b>
				<input type="text" id="name" name="name" onchange="upperCase()" required>
				<span id="blankMsg" style="color:red"> </span><br><br>

				<b><label for="roll no">STUDENT ID:</LABEL></b>
				<input type="text" id="studentid" name="id" required><br><br>

				<b><label for="pass1">CREATE PASSWORD:</LABEL></b>
				<input type="password" id="pass1" name="pass1" minlength="8" maxlength="8" required>
				<span id="message1" style="color:red"> </span><br><br>

				<b><label for="pass2">CONFIRM PASSWORD:</LABEL></b>
				<input type="password" id="pass2" name="pass2" minlength="8" maxlength="8"  required>
				<span id="message2" style="color:red"> </span><br><br>

				<b><label for="email">EMAIL ID :</label></b>
				<input type="email" id="email" name="email" required><br><br>

				<b><label for="mobile no">PHONE NUMBER :</label></b>
				<input type="tel" minlength="10" maxlength="10" id="phone" name="mobile" required><br><br>

				<b><label for="HOSTEL">HOSTEL :</label></b>
				<input type="text" id="hostel" name="hostel" required><br><br>

				<b><label for="ROOM NO.">ROOM NUMBER :</label></b>
				<input type="text" id="room" name="room" required><br><br>

				<label for="date"> <b>DATE</b>: </label>
				<input type="text" id="date" name="date" value="<?php echo date('d-m-Y');?>" readonly="readonly" required><br><br>

				<select class="complaint-type" name="complaint_type">
					<option>select issues</option>
					<option>Cleaning</option>
					<option>Electricity</option>
					<option>Drinking Water</option>
					<option>Room Related</option>
					<option>Others</option>
				</select>
				<br><br>
				<textarea name="complaint" placeholder="Write your Complaint Here.."></textarea><br><br>
				<pre><input type="submit" value="Submit" >             <input type="reset" value="Clear">
</pre>
		</div>
	</form>

</html>