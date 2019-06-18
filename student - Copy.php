<?php
session_start();
$conn=mysqli_connect("localhost","root","140777","user-registraion");
$stu_id=$_SESSION['sess_user'];
$result=mysqli_query($conn,"select * from login where username='$stu_id'");
$row=mysqli_fetch_assoc($result);
$result_2=mysqli_query($conn,"select * from prescription where idno='$stu_id'");
$count=mysqli_num_rows($result_2);
?>
<html>
	<head>
		<title>Student Details</title>
	</head>
	<style>
	body
	{
		margin:0;
		padding: 0;
		font-family: sans-serif;
		background:#262626;
	}
	.center
	{
		margin: 4%;
		border-radius: 7px;
		border-style: solid;
		width: 50%;
		height: 50%;
		background:#333;
		box-shadow: 0 50px 80px rgba(0,0,0,.5);
		color: whitesmoke;
		text-align: left;
		font-size: 18px;
	}
	td{
		padding-left: 45;
		width: 33%;
	}
	</style>
	<body bgcolor=#B3B3B3>
		<a style="margin-left:80%;color: white;font-size: 150%;" href="logout.php">Logout</a>
		<center>
		<table class="center">
			<tr><td colspan="3" style="color:white;background-color:maroon;text-align:center;"><b>Student Details</b></td></tr>
			<tr><td>Name</td><td><?php echo $row["name"];?></td><td style="padding: 25" width="200" height="200" rowspan="3"><img src="img/male.png" width="100%" height="100%" style="border-radius:4%"></td></tr>
			<tr><td>University ID</td><td><?php echo $row["username"];?></td></tr>
			<tr><td>Year of entry</td><td>2014</td></tr>
			
			<tr style="color:white;background-color:maroon;"><td colspan="2" align="center"><b>No of times visited to hospital</b></td>
				<td><?php echo $count;?></td>
			</tr>
			
		</table>
		</center>
	</body>
</html>
