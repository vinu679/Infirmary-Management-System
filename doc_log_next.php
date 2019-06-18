<?php
$conn=mysqli_connect("localhost","root","140777","user-registraion");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$id=$_POST["id"];
	$sql="select * from login where username='$id'";
	$sql1="select * from prescription where idno='$id'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$result_2=mysqli_query($conn,$sql1);
	$count=mysqli_num_rows($result_2);
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
<form class="regform" method="post" action="doc_preview.php">
	<!-- progressbar --> 
	<!-- fieldsets -->
	<fieldset id="second">
		<h2 class="fs-title">OP</h2>
		<h3 class="fs-subtitle">"To enjoy the glow of good health, you must exercise"</h3>
		<TABLE>
		<tr><td> Student Name: </td><td> <input   type="text_field" name="name"  type="text" value="<?php echo $row['name'];?>" readonly></td></tr>
		<tr><td>University ID: </td><td><input type="text_field" name="id" placeholder="" type="text" value="<?php echo $row['username'];?>" readonly></td></tr>
		<tr><td>BATCH </td><td> <input type="text_field" name="batch" placeholder="2014" type="text" value="2014" readonly=""></td></tr>
		<tr><td>Visit Count: </td><td><input type="text_field" name="" placeholder="" type="text" value="<?php echo $count;?>" readonly></td></tr>
		<tr><td>Date  : </td><td><input type="text_field" name="date" placeholder="YY/MM/DD" type="text" value="" required=""></td></tr>
		<tr><td>Patient Disease  : </td><td><input type="text_field" name="disease" type="text" value="" required=""></td></tr>
		<tr><td>Status of Disease :</td><td><input type="text_field" name="status_disease" type="text" value="" required=""></td></tr>
		 <tr><td>Medicine: </td><td><textarea rows="6" cols="6" placeholder="Medical prescription here..." name="medicine" required=""></textarea></td></tr>
		</TABLE>
		<!--<input id="pre_btn1" onclick="prev_step1()" type="button" value="Previous">-->
		<input id="next_btn2" name="next" type="submit" value="Next">
	</fieldset>
	
	
</form>
<!-- jQuery -->
<script src="/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="/js/jquery.easing.min.js" type="text/javascript"></script>



</body>
</html>



<!--
	<fieldset id="third">
		<h2 class="fs-title">Final prescription</h2>
		<h3 class="fs-subtitle">"You can't take good health for granted"</h3>
		<table>
		<tr><td><input type="text_field" name="ID" placeholder="N140983" disabled="disabled" type="text" value=""></td></tr>
		<tr><td><textarea rows="8" cols="70" disabled="disabled" placeholder="Final prescription is here......"></textarea></td></tr></table>
		<input id="pre_btn2" onclick="prev_step2()" type="button" value="Previous">
		<input class="submit_btn" onclick="validation(event);" type="submit" value="Submit">
	</fieldset>
	-->