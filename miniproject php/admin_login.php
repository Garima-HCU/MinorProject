<?php
session_start();
include("connection.php");
include("functions.php");
$user_data=get_user_data($con);
?>
<html>
    <head>
        <title>LOGIN</title>
		<link rel="stylesheet" href="raise.css?v=<?php echo time(); ?>">
    </head>
<body>
<div class="topnav">
    <a href="home.php">HOME</a>
    <!-- <a href="RegComplaint.php">REGISTER COMPLAINTS</a> -->
    <a href="admin.php">ADMIN</a>
   
    <a href="home.php" style="float:right">SIGN OUT</a>
  </div><br><br>
<div>
    <br>
<div id="block1">
    <div id="insidebox1">
       <h2>COMPLAINTS</h2>
    </div>
	<?php
	$query="select * from Hostel_guide";
	$result=mysqli_query($con,$query);
	?>
	<table>
		<tr>
			<th>Name</th>
			<th>Student ID</th>
			<th>Email ID</th>
			<th>Phone Number</th>
            <th>Hostel</th>
            <th>Room Number</th>
            <th>Date</th>
            <th>Complaint Type</th>
            <th>Complaint</th>
		</tr>
		<?php
		while($rows=$result->fetch_assoc())
		{
			if($rows['Student_id']!='Admin') {
		?>
		<tr>
        <td>
            <?php echo $rows['Name'];?></td>
			<td><?php echo $rows['Student_id'];?></td>
			<td><?php echo $rows['Email'];?></td>
			<td><?php echo $rows['Phone Number'];?></td>
			<td><?php echo $rows['Hostel'];?></td>
            <td><?php echo $rows['Room number'];?></td>
            <td><?php echo $rows['Date'];?></td>
            <td><?php echo $rows['Complaint type'];?></td>
            <td><?php echo $rows['Complaint'];?></td>
		</tr>
		<?php
			}
		}
		?>
	</table>
    </div>
    </body>
</html>