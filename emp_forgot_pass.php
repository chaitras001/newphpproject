

<?php
 include('connection.php');
ob_start();
session_start();
require_once './config.php';
require_once 'fconfig.php';

$redirectTo = "http://localhost/job/fb-callback.php";
$data = ['email'];
$fullurl = $handler->getLoginUrl($redirectTo,$data);

$msg='';


   if(isset($_POST['submit']))
   {
     $email = $_POST['email'];


     $sel_u = "select * from emp_reg where email='$email'";
     $run_u = mysqli_query($con, $sel_u);
     $check_u = mysqli_num_rows($run_u);
     $row_u = mysqli_fetch_array($run_u);
     
     // $u_name = $row_u['user_name'];
     $password = $row_u['password'];
     if($check_u==0)
     {
       echo "<script>alert('This Email Does Not Exist,Sorry!')</script>" ;
       echo "<script>window.open('emp_forgot_pass.php','_self')</script>";
       exit();
     }
     else
     {
      $to = "$email";
      $subject = "Login Details";
      $message = "<html>
        <h3>Dear $email</h3>
        <p>You Requested For Your Password</p>
        <b>Your Password Is</b><span style='color:red;'>$password</span>
        <h3>Thanks For Choosing Our Website</h3>  
       </html>";
      $headers = "From: 15cse188.giet@gmail.com";
       
       mail($to,$subject,$message,$headers);
  echo "<script>alert('A New Password Was Sent To Your Email')</script>";
       echo "<script>window.open('emp-login.php','_self')</script>";
  }
}

 ?>
 <?php


    include('connection.php');

    $get_home= "select * from home LIMIT 1";
    $run_home = mysqli_query($con, $get_home);
    while ($row_home = mysqli_fetch_array($run_home))
    {
        $title = $row_home['title'];
        $logo = $row_home['logo'];
        $banner_title = $row_home['banner_title'];
        $banner_image = $row_home['banner_image'];
        $video_link = $row_home['video_link'];
    }
?>
<!doctype html>
<html lang="en">

<!-- login35:56-->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="assets/plugins/css/plugins.css">
    
    <!-- Custom style -->
    <link href="assets/css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
    
	</head>
	<body class="simple-bg-screen" style="background-image:url(assets/img/banner-10.jpg);">
	    <?php
	    
	    include 'userheader.php';
	    
	    ?>
		<div class="wrapper">  
			
			<!-- Title Header Start -->
			<section class="login-screen-sec">
				<div class="container">
					<div class="login-screen">
						<a href="index.php"><img src="assets/img/logo/<?php echo $logo; ?>" class="img-responsive" alt=""></a>
						<?php if($msg!=''){?>
                <div class="alert alert-danger"><b><?php echo $msg ?></b></div><?php }?>
						<form method="POST">
						<div class="row text-center">
                        <div class="col-sm-12 col-md-12">
                            <input type="email" class="form-control" placeholder="User email" name="email" required="">
                        </div>
                         <div class="col-sm-12 col-md-12">
							<input type="password" class="form-control" placeholder="Last password you remember" name="password" required="">
                        </div>
                        

                        <div class="col-sm-12 col-md-12">
                            <div class="row">
                               <div class="col-sm-6 col-md-6">
                                  <input type="submit" name="submit" value="Submit" class="btn btn-login">
                                   
                               </div>
                               <div class="col-sm-6 col-md-6">
                                  <a href="register.php"><input type=""  value="New User? Register Here" class="btn btn-login"></a>
                               </div><br><br><br>
                               

                               
                            </div>

                        </div>
						</div>
							
							
							
						</form>
					</div>
				</div>
			</section>
			<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
			<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
				<button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
				<ul id="styleOptions" title="switch styling">
					<li>
						<a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
					</li>
				</ul>
			</div>
			
			<!-- Scripts
			================================================== -->
			<script type="text/javascript" src="assets/plugins/js/jquery.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/viewportchecker.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootsnav.js"></script>
			<script type="text/javascript" src="assets/plugins/js/select2.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootstrap-wysihtml5.js"></script>
			<script type="text/javascript" src="assets/plugins/js/datedropper.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/dropzone.js"></script>
			<script type="text/javascript" src="assets/plugins/js/loader.js"></script>
			<script type="text/javascript" src="assets/plugins/js/owl.carousel.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/slick.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/gmap3.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
			
			<!-- Custom Js -->
			<script src="assets/js/custom.js"></script>
			<script src="assets/js/jQuery.style.switcher.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}

				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>
		</div>
	</body>

<!-- login35:58-->
</html>
<?php
if(isset($_POST['gLogin']))
{
    header('location:google_login.php');
}

?>