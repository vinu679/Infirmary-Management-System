<?php
session_start();
//echo $_SESSION['type'];
//echo $_SESSION['sess_user'];
if(isset($_SESSION['sess_user'])!="")
{
  if($_SESSION['type']=="student")
  {
    header("student.php");
  }
  else if($_SESSION['type']=="parmacy")
  {
      header("par_log.php");   
  }
  else if($_SESSION['type']=="student")
  {
      header("doc_log.php");   
  }
}
?>
<!doctype html>  
<html>  
<head>  
<title>Login</title>  
    <style>   
 #myBtn {
    display: none;
    position: fixed;
    width:80px;
    height:80px;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: #3b5998;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
  }

  #myBtn:hover {
    background-color: #555;
  }
</style>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <meta name="theme-color" content="#2fd0af">
  
    <link rel="shortcut icon" type="image/x-icon" href="img/icons/logo.png">
    <title>RGUKT-N OIMS</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src= "vendor/bootstrap/css/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/flexslider.css" rel="stylesheet" >
    <link href="css/animate.css" rel="stylesheet" >
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/menu.css" type="text/css">
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

</head>  
<body>
<body id="page-top">
  <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="img/bp.jpg" width="50px" height="40px"></button>
  <script>
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
  </script>
<header >
        
        <div class="header-content container-fluid" >
            <div class="header-content-inner">
                <h1 id="homeHeading" style="text-shadow: 2px 2px 4px #000000;margin-left:-20px;margin-top:-100px;font-size:40px;color:white;">Online Infirmary Management System</h1>
                <hr>
                <p style="color:#fff;text-shadow: 3px 3px 6px #000000;font-size:20px;font-weight: 700">To Enjoy the glow of Good Health,You must exercise</p>
            </div>
        </div>
    </header>

  
<?php  
if(isset($_POST["submit"]))
{  
  if(!empty($_POST['user']) && !empty($_POST['pass'])) 
  {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    
      $con=mysqli_connect('localhost','root','140777') or die(mysqli_error());  
      mysqli_select_db($con,'user-registraion') or die("cannot select DB");  
  
      $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
      $numrows=mysqli_num_rows($query);  
      if($numrows!=0)  
      {  
          while($row=mysqli_fetch_assoc($query))  
          {  
              $dbusername=$row['username'];  
              $dbpassword=$row['password'];  
          }  
  
          if($user == $dbusername && $pass == $dbpassword)  
          {  
              //session_start();  
              $_SESSION['sess_user']=$user;
              $_SESSION['type']=$row['type'];  
  
              /* Redirect browser */  
              header("Location: student.php");  
          }
           else 
          {  
             echo "Invalid username or password!";  
          }    
      } 
      
  } 
  elseif(!empty($_POST['user1']) && !empty($_POST['pass1'])) 
  {  
    $user=$_POST['user1'];  
    $pass=$_POST['pass1'];  
    
      $con=mysqli_connect('localhost','root','140777') or die(mysqli_error());  
      mysqli_select_db($con,'user-registraion') or die("cannot select DB");  
  
      $query=mysqli_query($con,"SELECT * FROM d_login WHERE username='".$user."' AND password='".$pass."'");  
      $numrows=mysqli_num_rows($query);  
      if($numrows!=0)  
      {  
          while($row=mysqli_fetch_assoc($query))  
          {  
              $dbusername=$row['username'];  
              $dbpassword=$row['password'];  
          }  
  
          if($user == $dbusername && $pass == $dbpassword)  
          {  
              //session_start();  
              $_SESSION['sess_user']=$user;  
              $_SESSION['type']=$row["type"];
  
              /* Redirect browser */  
              header("Location: doc_log.php");  
          }  
      } 
      else 
      {  
          echo "Invalid username or password!";  
      }  
  } 
   elseif(!empty($_POST['user2']) && !empty($_POST['pass2'])) 
  {  
    $user=$_POST['user2'];  
    $pass=$_POST['pass2'];  
    
      $con=mysqli_connect('localhost','root','140777') or die(mysqli_error());  
      mysqli_select_db($con,'user-registraion') or die("cannot select DB");  
  
      $query=mysqli_query($con,"SELECT * FROM p_login WHERE username='".$user."' AND password='".$pass."'");  
      $numrows=mysqli_num_rows($query);  
      if($numrows!=0)  
      {  
          while($row=mysqli_fetch_assoc($query))  
          {  
              $dbusername=$row['username'];  
              $dbpassword=$row['password'];  
          }  
  
          if($user == $dbusername && $pass == $dbpassword)  
          {  
              //session_start();  
              $_SESSION['sess_user']=$user;  
              $_SESSION['type']=$row["type"];
              /* Redirect browser */  
              header("Location: par_log.php");  
          }  
      } 
      else 
      {  
          echo "Invalid username or password!";  
      }  
  }
  elseif(!empty($_POST['user4']) && !empty($_POST['pass4'])) 
  {  
    $user=$_POST['user4'];  
    $pass=$_POST['pass4'];  
    
      $con=mysqli_connect('localhost','root','140777') or die(mysqli_error());  
      mysqli_select_db($con,'user-registraion') or die("cannot select DB");  
  
      $query=mysqli_query($con,"SELECT * FROM dl_login WHERE username='".$user."' AND password='".$pass."'");  
      $numrows=mysqli_num_rows($query);  
      if($numrows!=0)  
      {  
          while($row=mysqli_fetch_assoc($query))  
          {  
              $dbusername=$row['username'];  
              $dbpassword=$row['password'];  
          }  
  
          if($user == $dbusername && $pass == $dbpassword)  
          {  
              //session_start();  
              $_SESSION['sess_user']=$user;  
              $_SESSION['type']=$row["type"];
              /* Redirect browser */  
              header("Location: director.php");  
          }  
      } 
      else 
      {  
          echo "Invalid username or password!";  
      }  
  }
  elseif(!empty($_POST['user5']) && !empty($_POST['pass5'])) 
  {  
    $user=$_POST['user5'];  
    $pass=$_POST['pass5'];  
    
      $con=mysqli_connect('localhost','root','140777') or die(mysqli_error());  
      mysqli_select_db($con,'user-registraion') or die("cannot select DB");  
  
      $query=mysqli_query($con,"SELECT * FROM admin_login WHERE username='".$user."' AND password='".$pass."'");  
      $numrows=mysqli_num_rows($query);  
      if($numrows!=0)  
      {  
          while($row=mysqli_fetch_assoc($query))  
          {  
              $dbusername=$row['username'];  
              $dbpassword=$row['password'];  
          }  
  
          if($user == $dbusername && $pass == $dbpassword)  
          {  
              //session_start();  
              $_SESSION['sess_user']=$user;  
              $_SESSION['type']=$row["type"];
  
              /* Redirect browser */  
              header("Location: register.php");  
          }  
      } 
      else 
      {  
          echo "Invalid username or password!";  
      }  
  } 
  else 
  {  
      echo "All fields are required!";  
  }  
}  
?> 
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
                    <span">Rajiv Gandhi University Of Knowledge Technologies </span>
                </a>
            </div>
            <nav class="menu" title="Menu">
                <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
                <label class="menu-open-button" for="menu-open">
                    <span class="hamburger hamburger-1"></span>
                    <span class="hamburger hamburger-2"></span>
                    <span class="hamburger hamburger-3"></span>
                </label>
                <a href="#page-top" class="menu-item" title="Home"> <i class="fa fa-home"></i> </a>
                <a href="#doctor" class="menu-item" title="Doctors"> <i class="fa fa-user-md"></i> </a>
                <a href="#specialist" class="menu-item" title="Specialist"> <i class="fa fa-male" ></i> </a>
                <a href="#login_area" class="menu-item" title="Login Area"> <i class="fa fa-user"></i> </a>
                <a href="about.php" class="menu-item" title="About Us"> <i class="fa fa-users"></i> </a>
                <a href="#contact" class="menu-item" title="Contact"> <i class="fa fa-phone"></i> </a>
            </nav>
            <!-- filters -->
            <svg  version="1.1">
                <defs>
                    <filter id="shadowed-goo">
                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                        <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
                        <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
                        <feOffset in="shadow" dx="1" dy="1" result="shadow" />
                        <feComposite in2="shadow" in="goo" result="goo" />
                        <feComposite in2="goo" in="SourceGraphic" result="mix" />
                    </filter>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                        <feComposite in2="goo" in="SourceGraphic" result="mix" />
                    </filter>
                </defs>
            </svg>
        </div>
        <!-- /.container-fluid -->
    </nav> 
<!--Doctors section-->
    <footer id="doctor" class="">
      <section id="device">
        <div class="container">
          <div class="row">
              <br><br><br><br>
            <div class="col-lg-12 text-center">
              <h1 class="section-heading" style="color: #000">Doctor Details</h1>
              <hr class="primary">
              <br>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-3">
                    <center style="color: black;" >
                          <a class="img" >
                            <div class="img__overlay">Dr.D.S.Srinivas</div>
                            <img src="img/dd1.png">
                          </a>
                          <br>
                          <a  title="Qualification : MBBS" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Working Hours : 8:00 AM - 12:00 PM ">
                          <button class="button" ><span>Details</span></button></a>
                          <div id="details1"></div>
                        <script>
                          $(document).ready(function(){
                            $('[data-toggle="popover"]').popover();
                          });
                        </script>
                     </center>
                  </div>
                  <div class="col-sm-3">
                    <center style="color: black;" >
                      <a class="img">
                        <div class="img__overlay">Dr.P.Vijaya Lakshmi</div>
                        <img src="img/dd2.png">
                      </a>
                      <br>
                      <a  title="Qualification : MBBS" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Working Hours : 12:00 PM - 4:00 PM ">
                        <button class="button" ><span>Details</span></button>
                      </a>
                        <div id="details1"></div>
                        <script>
                          $(document).ready(function(){
                            $('[data-toggle="popover"]').popover();
                          });
                        </script>
                    </center>
                  </div>
                  <div class="col-sm-3">
                    <center style="color: black;" >
                      <a class="img">
                        <div class="img__overlay">Dr.K.Gopal Krishna</div>
                        <img src="img/dd3.png">
                      </a>
                      <br>
                      <a  title="Qualification : MBBS" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Working Hours : 4:00 PM - 8:00 PM ">
                        <button class="button" ><span>Details</span></button>
                      </a>
                        <div id="details1"></div>
                        <script>
                          $(document).ready(function(){
                            $('[data-toggle="popover"]').popover();
                          });
                        </script>
                    </center>
                  </div>
                  <div class="col-sm-3">
                    <center style="color: black;" >
                      <a class="img">
                        <div class="img__overlay">Dr.G.Anjali</div>
                        <img src="img/dd4.png">
                      </a>
                      <br>
                      <a  title="Qualification : MBBS" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Working Hours : 8:00 PM - 12:00 AM ">
                        <button class="button" ><span>Details</span></button>
                      </a>
                        <div id="details1"></div>
                        <script>
                          $(document).ready(function(){
                            $('[data-toggle="popover"]').popover();
                          });
                        </script>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
    <!--Specialists section-->
    <footer id="specialist" class="">
      <section id="device">
        <div class="container">
          <div class="row">
              <br><br><br><br>
            <div class="col-lg-12 text-center">
              <h1 class="section-heading" style="color: #000">Specialist arrival details</h1>
              <hr class="primary">
              <br>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-3">
                    <center style="color: black;">
                      <a class="img">
                        <div class="img__overlay">Vinod Kumar</div>
                        <img src="img/dd5.png">
                      </a>
                      <br>
                      <a  title="Qualification : Psychologist" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Working Hours : 8:00 AM - 10:00 AM  Only Sundays ">
                        <button class="button" ><span>Details</span></button>
                      </a>
                        <div id="details1"></div>
                        <script>
                          $(document).ready(function(){
                            $('[data-toggle="popover"]').popover();
                          });
                        </script>
                    </center>
                  </div>
                  <div class="col-sm-3">
                    <center style="color: black;">
                      <a class="img">
                        <div class="img__overlay">Subash</div>
                        <img src="img/dd6.png">
                      </a>
                      <br>
                      <a  title="Qualification : Dermatologist" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Working Hours : 10:00 AM - 12:00 PM  Only Sundays ">
                        <button class="button" ><span>Details</span></button>
                      </a>
                        <div id="details1"></div>
                        <script>
                          $(document).ready(function(){
                            $('[data-toggle="popover"]').popover();
                          });
                        </script>
                    </center>
                  </div>
                  <div class="col-sm-3">
                    <center style="color: black;">
                      <a class="img">
                        <div class="img__overlay">Undru Mahesh</div>
                        <img src="img/dd7.png">
                      </a>
                      <br>
                      <a  title="Qualification : Dentist" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Working Hours : 12:00 PM - 2:00 PM  Only Sundays ">
                        <button class="button" ><span>Details</span></button>
                      </a>
                        <div id="details1"></div>
                        <script>
                          $(document).ready(function(){
                            $('[data-toggle="popover"]').popover();
                          });
                        </script>
                    </center>
                  </div>
                  <div class="col-sm-3">
                    <center style="color: black;">
                      <a class="img">
                        <div class="img__overlay">Uma Mahesh</div>
                        <img src="img/dd8.png">
                      </a>
                      <br>
                      <a  title="Qualification : Cardiologist" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Working Hours : 2:00 PM - 4:00 PM  Only Sundays ">
                        <button class="button" ><span>Details</span></button>
                      </a>
                        <div id="details1"></div>
                        <script>
                          $(document).ready(function(){
                            $('[data-toggle="popover"]').popover();
                          });
                        </script>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
    <br><br><br><br>
<!--Login section-->
    <footer id="login_area" class="">
      <section id="device">
        <div class="container">
          <div class="row">
              <br><br><br><br>
            <div class="col-lg-12 text-center">
              <h1 class="section-heading" style="color: #000">Login-Area</h1>
              <hr class="primary">
              <br><br>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-2">
                    <center>
                      <a href='#' class="img" onclick="document.getElementById('id01').style.display='block'" style="height: 150px;width:150px;" >
                        <div class="img__overlay">Student </div>
                        <img src="img/s1.png">
                      </a>
                      <div id="id01" class="testbox modal">
                        <form  method="POST" style="max-width:300px;margin:auto">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <img src="img/v1.png" alt="Student" class="avatar">
                                </div>
                        <h1>Member Login</h1>
                        <hr>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" placeholder="N140679" name="user" required="">

                        </div>
  
                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Exam Password" name="pass" required="">

                    </div>

                    <input class="button" type="submit" value="Login" name="submit"/>
                    </form>
                </div>
                <script>

                    var modal = document.getElementById('id01');
                    window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                        }
                    }
                </script>
                      <!--<h3 style="padding-left:30px;">Student</h3>-->
                    </center>
                  </div>
                  <div class="col-sm-2" >
                      <center>
                      <a href="#" class="img" onclick="document.getElementById('id02').style.display='block'" style="height: 150px;width:150px;" >
                        <div class="img__overlay">Doctor</div>
                        <img src="img/Doctor.png">
                      </a>
                      <div id="id02" class="testbox modal">
                        <form action="" method="POST" style="max-width:300px;margin:auto">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <img src="img/d2.png" alt="Doctor" class="avatar">
                                </div>
                        <h1>Doctor Login</h1>
                        <hr>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" placeholder="Username" name="user1" required="" autocomplete="off">

                        </div>
  
                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="pass1" required="">

                    </div>

                    <input class="button" type="submit" value="Login" name="submit"/>
                    </form>
                </div>
                <script>

                    var modal = document.getElementById('id02');
                    window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                        }
                    }
                </script>
                     <!-- <h3 style="padding-left:35px;">Doctor</h3>-->
                    </center>
                  </div>
                  <div class="col-sm-2">
                      <center>
                      <a href="#" class="img" onclick="document.getElementById('id03').style.display='block'" style="height: 150px;width:150px;" >
                        <div class="img__overlay">Pharmacy</div>
                        <img src="img/p.png">
                      </a>
                      <div id="id03" class="testbox modal">
                        <form action="" method="POST" style="max-width:300px;margin:auto">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <img src="img/p4.png" alt="Pharmacy" class="avatar">
                                </div>
                        <h1>Pharmacy Login</h1>
                        <hr>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" placeholder="Username" name="user2" required="" autocomplete="off">

                        </div>
  
                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="pass2" required="">

                    </div>

                    <input class="button" type="submit" value="Login" name="submit"/>
                    </form>
                </div>
                <script>

                    var modal = document.getElementById('id03');
                    window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                        }
                    }
                </script>
                      <!--<h3 style="padding-left:30px;">Pharmacy</h3>-->
                    </center>
                  </div>
                
                  <div class="col-sm-2" >
                      <center>
                      <a href="#" class="img" onclick="document.getElementById('id05').style.display='block'" style="height: 150px;width:150px;" >
                        <div class="img__overlay">Director</div>
                        <img src="img/d1.png">
                      </a>
                      <div id="id05" class="testbox modal">
                        <form action="" method="POST" style="max-width:300px;margin:auto">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <img src="img/r.png" alt="Director" class="avatar">
                                </div>
                        <h1>Director Login</h1>
                        <hr>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" placeholder="Username" name="user4" required="" autocomplete="off">

                        </div>  
                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="pass4" required="">

                    </div>

                    <input class="button" type="submit" value="Login" name="submit"/>
                    </form>
                </div>
                <script>

                    var modal = document.getElementById('id05');
                    window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                        }
                    }
                </script>
                     <!-- <h3 style="padding-left:30px;">Director</h3>-->
                    </center>
                  </div>

                    <div class="col-sm-2" >
                      <center>
                      <a href="#" class="img" onclick="document.getElementById('id04').style.display='block'" style="height: 150px;width:150px;" >
                        <div class="img__overlay">Admin</div>
                        <img src="img/a2.jpg">
                      </a>
                      <div id="id04" class="testbox modal">
                        <form action="" method="POST" style="max-width:300px;margin:auto">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <img src="img/ad.png" alt="Admin" class="avatar">
                                </div>
                        <h1>Admin Login</h1>
                        <hr>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" placeholder="Username" name="user5" required="" autocomplete="off">

                        </div>
  
                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="pass5" required="">

                    </div>

                    <input class="button" type="submit" value="Login" name="submit"/>
                    </form>
                </div>
                <script>

                    var modal = document.getElementById('id04');
                    window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                        }
                    }
                </script>
                     <!-- <h3 style="padding-left:30.5px;">Employee</h3>-->
                    </center>
                  </div>
                  <div class="col-sm-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
    <br><br><br><br><br><br><br><br>
    <footer id="contact" class="footer-distributed">

            <div class="footer-left">

                <h3><span><img style="height:30px" src="img/icons/logo.png"></span> <b> Online Infirmary Management System</b></h3>

                <p class="footer-company-name">RGUKT-N OIMS &copy; 2018. All Rights Reserved</p>
            </div>

            <div class="footer-center">

                <div>
          <a class="map-link" target="_blank" href="https://www.google.com/maps/place/IIIT+Nuzvid+Hospital/@16.7933524,80.8224501,17z/data=!4m12!1m6!3m5!1s0x3a3675e44fe2f987:0x3addae9ee48b9487!2sIIIT+Nuzvid+Hospital!8m2!3d16.7933473!4d80.8246388!3m4!1s0x3a3675e44fe2f987:0x3addae9ee48b9487!8m2!3d16.7933473!4d80.8246388">
                    <i class="fa fa-map-marker"></i>
                    <p><span>AP IIIT NUZVID</span> RGUKT-HOSPITAL</p>
        </a>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p><a href="tel:+91-7095175348">+91-7095175348</a></p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a target="_blank" href="mailto:N140597@rguktn.ac.in">reachus@oims.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the OIMS</span>
                    OIMS is a RGUKT-Online Infirmary Management System which is working on Health issues.
                </p>

                <div class="footer-icons">
                    <a target="_blank" href="https://twitter.com/mahesh_undru"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/company/faclon?trk=ppro_cprof"><i class="fa fa-linkedin"></i></a>
                </div>

            </div>

        </footer>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>  
</body>  
</html>   