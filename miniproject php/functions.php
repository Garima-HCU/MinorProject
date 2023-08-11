<?php
function get_user_data($con)
{
	if(isset($_SESSION['studentID']))
	{
		$id=$_SESSION['studentID'];
		$query="select * from Hostel_guide where Student_id = '$id' limit 1";
		$result=mysqli_query($con,$query);
		if($result && mysqli_num_rows($result)>0)
		{
			$user_data=mysqli_fetch_assoc($result);
			return $user_data;
		}
		header("Location: RegComplaint.php");
		die;
	}
}
?>