<!DOCTYPE html>
<html>
<head>
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
    
	<link href="css/s1.css" rel="stylesheet" type="text/css">
</head>
<body>
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
<!-- multistep form -->
<form class="regform" method="POST" action="doc_log_next.php">
	<!-- progressbar --> 
	<!-- fieldsets -->
	<fieldset id="first">
		<h2 class="fs-title">Student ID</h2>
		<h3 class="fs-subtitle">"Maintaining good health should be the primary focus of everyone"</h3>
		<!--<h3 class="fs-subtitle">This is step 1</h3>-->
		ID: <input  type="text" name="id" id="idno" type="text"	required="">
			<input id="next_btn1" type="submit" name="submit" value="Next">
	</fieldset>
	
</form>
<!-- jQuery -->
<script src="/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="/js/jquery.easing.min.js" type="text/javascript"></script>
</body>
</html>
