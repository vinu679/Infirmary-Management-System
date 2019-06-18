<?php
$conn=mysqli_connect("localhost","root","140777","user-registraion");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$id=$_POST["id"];
	$name=$_POST["name"];
	$batch=$_POST["batch"];
	$date=$_POST["date"];
	$disease=$_POST["disease"];
	$status_disease=$_POST["status_disease"];
	$medicine=$_POST["medicine"];
	$sql="insert into  prescription (idno,name,batch,disease,status_disease,medicine,date) values ('$id','$name','$batch','$disease','$status_disease','$medicine','$date')";
	if(mysqli_query($conn,$sql))
	{
		?><script>alert("prescription submitted successfully")</script><?php
		
	}
}
else
{
	header("location:doc_log.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/s1.css" rel="stylesheet" type="text/css">
	<script src="js/s.js" type="text/javascript"></script>
</head>
<body>

<!-- multistep form -->
<form class="regform" method="post" action="doc_preview.php" style="width:800px !important;height:1000px;">
	<!-- progressbar --> 
	<!-- fieldsets -->
	<fieldset id="second">
		<h2 class="fs-title">PREVIEW</h2>
		<h3 class="fs-subtitle">"To enjoy the glow of good health, you must exercise"</h3>
		<TABLE>
		<tr><td> Student Name: </td><td><?php echo $name;?></td></tr>
		<tr></tr>
		<tr><td>University ID: </td><td><?php echo $id;?></td></tr>
		<tr><td>BATCH </td><td><?php echo $batch;?></td></tr>
		<tr><td>Date : </td><td><?php echo $date;?></td></tr>
		<tr><td>Patient Disease  : </td><td><?php echo $disease;?></td></tr>
		<tr><td>Status of Disease :</td><td><?php echo $status_disease;?></td></tr>
		 <tr><td>Medicine: </td><td><?php echo $medicine;?></td></tr>
		</TABLE>
		<!--<input id="pre_btn1" onclick="prev_step1()" type="button" value="Previous">-->
		<!--<input id="next_btn2" name="next" type="submit" value="Next">-->
		<input id="pre_btn2" onclick="window.location.assign('doc_log.php');" type="button" value="Submit" style="width:200px;font-size:20px">
	</fieldset>
	
	
</form>
<!-- jQuery -->
<script src="/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="/js/jquery.easing.min.js" type="text/javascript"></script>



</body>
</html>