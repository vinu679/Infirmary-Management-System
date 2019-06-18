<?php
$conn=mysqli_connect("localhost","root","140777","user-registraion");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$id=$_POST["id"];
	$sql="select * from login where username='$id'";
	$sql1="select * from prescription where idno='$id' order by sno desc";
	$result=mysqli_query($conn,$sql);
	$result1=mysqli_query($conn,$sql1);
	$row=mysqli_fetch_assoc($result);
	$row1=mysqli_fetch_assoc($result1);
}
else
{
	header("location:par_log.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/s1.css" rel="stylesheet" type="text/css">

</head>
<body>
<!-- multistep form -->
<form class="regform" method="post" action="doc_log_next.php" style="width:800px !important;height:1000px;">
	<!-- progressbar --> 
	<!-- fieldsets -->
	<fieldset id="second">
		<h2 class="fs-title">PREVIEW</h2>
		<h3 class="fs-subtitle">"To enjoy the glow of good health, you must exercise"</h3>
		<TABLE>
		<tr><td> Student Name: </td><td><?php echo $row1['name'];?></td></tr>
		<tr></tr>
		<tr><td>University ID: </td><td><?php echo $row1['idno'];?></td></tr>
		<tr><td>BATCH :</td><td><?php echo $row1['batch'];?></td></tr>
		<tr><td>Patient Disease  : </td><td><?php echo $row1['disease'];?></td></tr>
		<tr><td>Status of Disease :</td><td><?php echo $row1['status_disease'];?></td></tr>
		 <tr><td>Medicine: </td><td><?php echo $row1['medicine'];?></td></tr>
		</TABLE>
		<br>
		<input id="next_btn1" onclick="window.location.assign('par_log.php');" type="button" value="Submit" style="width:200px;font-size:20px">
		<!--<input id="next_btn2" name="next" type="submit" value="Next" onclick="window.location.assign('par_log.php');">-->
	</fieldset>
	
	
</form>
<!-- jQuery -->
<script src="/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="/js/jquery.easing.min.js" type="text/javascript"></script>



</body>
</html>