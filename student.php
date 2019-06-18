<?php
session_start();
$conn=mysqli_connect("localhost","root","140777","user-registraion");
$stu_id=$_SESSION['sess_user'];
$result=mysqli_query($conn,"select * from login where username='$stu_id'");
$row=mysqli_fetch_assoc($result);
$result_2=mysqli_query($conn,"select * from prescription where idno='$stu_id'");
$count=mysqli_num_rows($result_2);
$sql1="select * from prescription where idno='$stu_id' order by sno desc";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);
?>
<html>
	<head>
		<title>Student Details</title>
		<script type="text/javascript">
			function setImage(){
				var element = document.getElementById('pic');
				var photoChange = document.getElementById('image');
				//alert(element.textContent);
				photoChange.src = 'pics/'+element.textContent + '.jpg';
			}

		</script>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <meta name="theme-color" content="#2fd0af">
    <title>Doctor-Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src= "vendor/bootstrap/css/bootstrap.min.js"></script>
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="css/menu.css" type="text/css">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/flexslider.css" rel="stylesheet" >
    <link href="css/animate.css" rel="stylesheet" >
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">
	</head>
	<style>
	body
	{
		margin:0;
		padding: 0;
		font-family: sans-serif;
	}
	.center
	{
		margin: 4%;
		border-radius: 7px;
		border-style: solid;
		width: 50%;
		height: 50%;
		background: white;
		box-shadow: 0 50px 80px rgba(0,0,0,.5);
		color: black;
		text-align: left;
		font-size: 18px;
	}
	td{
		padding-left: 45;
		width: 33%;
		text-align: center;
	}
	</style>
	<body height="100%">
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid" style="height:50px;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <!-- <img class="navbar-brand"id="logoIm" src="img/logo.png" style="padding-right:20px;"> -->
                <a class="navbar-brand page-scroll" href="#page-top">
                	<span><img style="height:30px" src="img/icons/logo.png"></span>
                	<span>Rajiv gandhi university knowledge & Technologies </span>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
				<li ><a style="color: black;font-size: 120%;" href="logout.php"><span  class="glyphicon glyphicon-user" ></span> Logout</a></li>
			</ul>
	</div></nav>
		<br><br>
		<script> window.onload = setImage</script>
		<center>
		<table class="center">
			<tr>
				<td colspan="3" style="color:white;background-color:maroon;text-align:center;"><b>Student Details</b></td>
			</tr>
			<tr>
				<td>Name ::</td>
				<td><?php echo $row["name"];?></td>
				<td style="padding: 25" width="200" height="200" rowspan="3"><img id="image" src="img/male.png" width="100%" height="100%" style="border-radius:4%"></td>
			</tr>
			<tr>
				<td>University ID ::</td>
				<td id="pic"><?php echo $row["username"];?></td>
			</tr>
			<tr>
				<td>Year of entry ::</td><td>2014</td></tr>
			<tr style="color:white;background-color:maroon;">
				<td colspan="2" align="center"><b>No of times visited to hospital ::</b></td>
				<td><?php echo $count;?></td>
			</tr>
		</table>
		<TABLE class="center">
			<tr>
				<td colspan="3" style="color:white;background-color:maroon;text-align:center;"><b>Latest Preview</b>
				</td>
			</tr>
			<tr>
				<td> Student Name :: </td>
				<td><?php echo $row1['name'];?>
				</td>
			</tr>
			<tr>
				<td>University ID :: </td>
				<td><?php echo $row1['idno'];?>
				</td>
			</tr>
		<tr>
			<td>BATCH ::</td>
			<td><?php echo $row1['batch'];?>
			</td>
		</tr>
		<tr>
			<td>Date ::</td>
			<td><?php echo $row1['date'];?>
			</td>
		</tr>
		<tr>
			<td>Patient Disease :: </td>
			<td><?php echo $row1['disease'];?>
			</td>
		</tr>
		<tr>
			<td>Status of Disease ::</td><td><?php echo $row1['status_disease'];?>
			</td>
		</tr>
		 <tr>
		 	<td>Medicine :: </td>
		 	<td><?php echo $row1['medicine'];?>
		 	</td>
		 </tr>
		</TABLE>
		</center>
	</body>
</html>
