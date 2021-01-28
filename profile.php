<?php
ob_start();
session_start();
include("connection.php");

if(!isset($_SESSION['id'])  && !isset($_SESSION["email"] ) && !isset($_SESSION["accesstoken"]))
{
    header('location:index.php');
}

if(isset($_SESSION['id']))
 {
     $id=$_SESSION['id'];
     //$email = $_SESSION["email"];
     $sql=mysqli_query($con,"select * from user_reg where id='$id'");
     $row=mysqli_fetch_array($sql);
}
if(isset($_SESSION["email"]))
{
    $email = $_SESSION["email"];
    if(isset($_SESSION["new_user"])=="yes")
    {
        $sq=mysqli_query($con,"select * from user_reg where email='$email'");
        $rw=mysqli_fetch_array($sq);
        if($rw)
        {
            $id = $rw['id'];
            $_SESSION['id'] = $id;
            unset($_SESSION["email"]);
            header('location:g-updatesdetails.php');
            
        }
        
        
    }
    if(isset($_SESSION["new_user"])=="no")
    {
         $sl=mysqli_query($con,"select * from user_reg where email='$email'");
         $ro=mysqli_fetch_array($sl);
         if($ro)
         {
                $id = $ro['id'];
                
                $status = $ro['reg_details'];
                if($status=="pending")
                {
                     $_SESSION['id'] = $id;
                     unset($_SESSION["email"]);
                     header('location:g-updatesdetails.php');
                }
             else
             {
                 $_SESSION['id'] = $id;
                 unset($_SESSION["email"]);
                 header('location:profile.php');
                 
                 
             }
                
         }
        
    }
    unset($_SESSION["email"]);
    
    
    
}
if(isset($_SESSION["accesstoken"]))
{
    $email = $_SESSION["userdata"]['email'];
    if(isset($_SESSION["alredyReg"])=="yes")
    {
        $sq=mysqli_query($con,"select * from user_reg where email='$email'");
        $rw=mysqli_fetch_array($sq);
        if($rw)
        {
            $id = $rw['id'];
            $_SESSION['id'] = $id;
            unset($_SESSION["accesstoken"]);
            header('location:g-updatesdetails.php');
            
        }
        
    }
    if(isset($_SESSION["alredyReg"])=="No")
    {
         $sl=mysqli_query($con,"select * from user_reg where email='$email'");
         $ro=mysqli_fetch_array($sl);
         if($ro)
         {
                $id = $ro['id'];
                $status = $ro['reg_details'];
                if($status=="pending")
                {
                     $_SESSION['id'] = $id;
                     unset($_SESSION["accesstoken"]);
                     header('location:g-updatesdetails.php');
                }
             else
             {
                 $_SESSION['id'] = $id;
                 unset($_SESSION["accesstoken"]);
                 header('location:profile.php');
                 
                 
             }
                
         }
        
    }
   unset($_SESSION["accesstoken"]);
    
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

<!-- candidate-profile41:26-->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<title><?php echo $title; ?> </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="assets/plugins/css/plugins.css">
    
    <!-- Custom style -->
    <link href="assets/css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
    
	</head>
	<body>
		<div class="wrapper">  
			    
			<!-- Start Navigation -->
			<?php
			include('header.php');
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>User Profile</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
		
		<!-- Candidate Profile Start -->
		
        <section class="detail-desc advance-detail-pr gray-bg">
            <div class="container white-shadow">
			
                <div class="row">
                    <div class="detail-pic"><img src="upload/<?php echo $row['img_filename']; ?>" class="img" alt="" /></div>
                    <!-- <div class="detail-status"><span>Active Now</span></div> -->
                </div>
				
                <div class="row bottom-mrg">
                    <div class="col-md-12 col-sm-12">
                        <div class="advance-detail detail-desc-caption">
                            <h4><?php   echo $row['uname'];  ?></h4><span class="designation"><?php   echo $row['skill'];  ?></span>
                            
                        </div>
                    </div>
                </div>
				
                <div class="row no-padd">
                    <div class="detail pannel-footer">
                        <div class="col-md-5 col-sm-5">
                            <!-- <ul class="detail-footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul> -->
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="detail-pannel-footer-btn pull-right"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="footer-btn grn-btn" title="">Edit Below</a></div>
                        </div>
                    </div>
                </div>
				
            </div>
        </section>

                                       
		
        <section class="full-detail-description full-detail gray-bg">
            <div class="container">
                <div class="col-md-12 col-sm-12">
                    <div class="full-card">
                      <div class="deatil-tab-employ tool-tab">
							<ul class="nav simple nav-tabs" id="simple-design-tab">
								<li class="active"><a href="#about">About</a></li>
								<li><a href="#address">Address</a></li>
								
								<li><a href="#messages">Offer Letter <!--<span class="info-bar"></span>--></a></li>
								<li><a href="#settings">Settings</a></li>
								<li><a href="#cv">Manage CV</a></li>
							</ul>
							
							<!-- Start All Sec -->
							<div class="tab-content">
								<div id="about" class="tab-pane fade in active">
									<h3>About <?php   echo $row['uname'];  ?></h3>
									<p><?php   echo $row['des'];  ?></p>
								</div>
								<!-- End About Sec -->
								
								<!-- Start Address Sec -->
								<div id="address" class="tab-pane fade">
									<h3>Address Info</h3>
									<ul class="job-detail-des">
										<li><span>Industry:</span><?php   echo $row['industry'];  ?></li>
										<li><span>City:</span><?php   echo $row['location'];  ?></li>
										<li><span>Qualification:</span><?php   echo $row['qual'];  ?></li>
										<li><span>Job Function:</span><?php   echo $row['job_fun'];  ?></li>
										
										<li><span>Telephone:</span><?php   echo $row['number'];  ?></li>
										
										<li><span>Email:</span><?php   echo $row['email'];  ?></li>
									</ul>
								</div>
								<!-- End Address Sec -->
								
								<!-- Start Job List -->
							
								<!-- End Job List -->
								
								<!-- Start Friend List -->
								
								<!-- End Friend List -->
								
								<!-- Start Message -->
								<div id="messages" class="tab-pane fade">
									<div class="inbox-body inbox-widget">
									<table class="table">
                                    <tr>
                                        <th>Interview Date</th>
                                        <th>Time</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                    </tr>
									<?php
                                        if(isset($_SESSION['id']) || isset($_SESSION["email"]))
                                        {
                                            $id = $_SESSION['id'];
                                            $qwe = "SELECT * FROM `can_job_status` WHERE canid='$id'";
                                            $qw = mysqli_query($con,$qwe);
                                            while($er = mysqli_fetch_array($qw))
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $er['Int_date'];?></td>
                                                    <td><?php echo $er['Int_timee'];?></td>
                                                    <td><?php echo $er['address'];?></td>
                                                    <td><?php echo $er['description'];?></td>
                                                    </tr>
                                                
                                                <?php
                                            }
                                            
                                        }
                                        else
                                        {
                                            header('location:index.php');
                                        }
                                        
                                        ?>
										
										</table>
										
										
									</div>
								</div>
								<!-- End Message -->
								
								<!-- Start Settings -->
								
									  
								<div id="settings" class="tab-pane fade">
								<form method="POST">
								<input type="hidden" name="id" value="<?php echo $row['id'];  ?>">
									<div class="row no-mrg">
										<h3>Edit Profile</h3>
										<div class="edit-pro">
											<div class="col-md-4 col-sm-6">
												<label>First Name</label>
												<input type="text" class="form-control" value="<?php echo $row['uname'];?>" name="uname">
											</div>
											
											<div class="col-md-4 col-sm-6">
												<label>Email</label>
												<input type="email" class="form-control" value="<?php echo $row['email'];?>" name="email">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Phone</label>
												<input type="text" class="form-control" value="<?php echo $row['number'];?>" name="number">
											</div>
											
											<div class="col-md-4 col-sm-6">
												<label>Location</label>
												<input type="text" class="form-control" value="<?php echo $row['location'];?>" name="location">
											</div>
											
											<div class="col-md-4 col-sm-6">
												<label>Organization</label>
												<input type="text" class="form-control" value="<?php echo $row['industry'];?>" name="industry">
											</div>
											
											
										<div class="col-md-4 col-sm-6">
												<label>Description</label>
												<input type="text" class="form-control" value="<?php echo $row['des'];?>" name="des">
											</div>
											
											<div class="col-sm-12">
												<input type="submit" name="submit" value="Update Now" class="update-btn">
											</div>
										</div>
									</div>
									</form>
								</div>
								<?php
							    	include('connection.php');
							    	if(isset($_SESSION['id']))
							    	{
										$user_id = $_SESSION['id'];
									}

								    $get_cv= "select * from create_resume where user_id='$user_id'";
								    $run_cv = mysqli_query($con, $get_cv);
								    while ($row_cv = mysqli_fetch_array($run_cv))
								    {
								        $name = $row_cv['name'];
								        $email = $row_cv['email'];
								        $phone = $row_cv['phone'];
								        $address = $row_cv['address'];
								        $education = $row_cv['education'];
								        $experience = $row_cv['experience'];
								        $skill = $row_cv['skill'];
								        $content = $row_cv['content'];
								        $dob = $row_cv['dob'];
								    }
								?>
								<!-- End Settings -->
								<div id="cv" class="tab-pane fade">
								<form method="POST">
								
									<div class="row no-mrg">
										<h3>Manage CV</h3>
										<div class="edit-pro">
											<div class="col-md-4 col-sm-6">
												<label>Full Name</label>
												<input type="text" class="form-control" value="<?php echo $name;?>" name="name">
											</div>
											
											<div class="col-md-4 col-sm-6">
												<label>Email</label>
												<input type="email" class="form-control" value="<?php echo $email;?>" name="email">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Phone</label>
												<input type="text" class="form-control" value="<?php echo $phone;?>" name="phone">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Dob</label>
												<input type="date" class="form-control" value="<?php echo $dob;?>" name="dob">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Location</label>
												<input type="text" class="form-control" value="<?php echo $address;?>" name="address">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Education</label>
												<input type="text" class="form-control" value="<?php echo $education;?>" name="education">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Experience</label>
												<input type="text" class="form-control" value="<?php echo $experience;?>" name="experience">
											</div>
											
											
										<div class="col-md-4 col-sm-6">
												<label>Skill</label>
												<input type="text" class="form-control" value="<?php echo $skill;?>" name="skill">
											</div>
											<div class="col-md-4"></div>
											<div class="col-md-12 col-sm-12">
												<label>Resume Content</label>
												<textarea class="form-control textarea" placeholder="Write Resume Content........" name="content"><?php echo $content;?></textarea>
											</div>
											<div class="col-sm-12">
												<input type="submit" name="update_cv" value="Update Cv" class="btn btn-primary">
											</div>
										</div>
									</div>
									</form>
									<?php 
										if(isset($_POST['update_cv']))
										{
											
											$name = $_POST['name'];
											$email = $_POST['email'];
											$phone = $_POST['phone'];
											$dob = $_POST['dob'];
											$address = $_POST['address'];
											$education = $_POST['education'];
											$experience = $_POST['experience'];
											$skill = $_POST['skill'];
											$content = $_POST['content'];
											
										
											$update_cv = "update create_resume set name='$name', email='$email', phone='$phone', dob='$dob', address='$address', education='$education', experience='$experience', skill='$skill', content='$content' where user_id='$user_id'";
											$run_cv = mysqli_query($con,$update_cv);
											if($run_cv)
											{
												echo "<script>alert('Sucessfully updated')</script>";
												echo "<script>window.open('profile.php','_self')</script>";
											}
										}
									?>
								</div>
							</div>
							<!-- Start All Sec -->
						</div>  
                    </div>
                </div>
            </div>
        </section>
        
		<!-- Candidate Profile End -->
		
			<!-- Footer Section Start -->
			<?php
			include('footer.php');
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="tab" role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
								<li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content" id="myModalLabel2">
								<div role="tabpanel" class="tab-pane fade in active" id="login">
									<img src="assets/img/logo.png" class="img-responsive" alt="" />
									<div class="subscribe wow fadeInUp">
										<form class="form-inline" method="post">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="email"  name="email" class="form-control" placeholder="Username" required="">
													<input type="password" name="password" class="form-control"  placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="login-btn" class="submit-btn"> Login </button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane fade" id="register">
								<img src="assets/img/logo.png" class="img-responsive" alt="" />
									<form class="form-inline" method="post">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="text"  name="email" class="form-control" placeholder="Your Name" required="">
													<input type="email"  name="email" class="form-control" placeholder="Your Email" required="">
													<input type="email"  name="email" class="form-control" placeholder="Username" required="">
													<input type="password" name="password" class="form-control"  placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="subscribe" class="submit-btn"> Create Account </button>
													</div>
												</div>
											</div>
										</form>
								</div>
							</div>
							</div>
						</div>
						</div>
				</div>
			</div>   
			<!-- End Sign Up Window -->
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

<!-- candidate-profile41:39-->
</html>
<?php
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$uname=$_POST['uname'];
$email=$_POST['email'];
$number=$_POST['number'];
$location=$_POST['location'];
$industry=$_POST['industry'];
$des=$_POST['des'];
$sql=mysqli_query($con,"UPDATE  user_reg set uname='$uname', email='$email',number='$number',location='$location',industry='$industry',des='$des' where id='$id'");
if($sql)
{
echo "information updated";
}
else
{
	echo mysqli_error($con);
}
}
?>