<?php
    session_start();
    ob_start();
    include('connection.php');

    $get_home= "select * from home LIMIT 1";
    $run_home = mysqli_query($con, $get_home);
    while ($row_home = mysqli_fetch_array($run_home))
    {
        $title = $row_home['title'];
        $logo = $row_home['logo'];
        $banner_title = $row_home['banner_title'];
        $sector_image = $row_home['sector_image'];
    }
?>
<!doctype html>
<html lang="en">

<!-- browse-jobs41:11-->
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
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	 <script type="text/javascript" src="script3.js"></script>
	 <script type="text/javascript" src="script4.js"></script>
    
	</head>
	<body>
	           
		<?php
		
		include 'userheader.php';
		
		?>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/<?php echo $sector_image; ?>);">
				<div class="container">
					<h1> Jobs</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- ========== Begin: Brows job Category ===============  -->
			<section class="brows-job-category">
				<div class="container">
					<!-- Company Searrch Filter Start -->
					<div class="row extra-mrg">
						<div class="wrap-search-filter">
							<form>
								<div class="col-md-4 col-sm-4">
									<input type="text" class="form-control" placeholder="Keyword: Name, Tag" id="search3">
								</div>
								<div class="col-md-3 col-sm-3">
									<input type="text" class="form-control" placeholder="Location: City, State, Zip" id="search4">
								</div>
								
								
							</form>
						</div>
					</div>
					 <div id="display"></div>
					<!-- Company Searrch Filter End -->
					
					<div class="item-click">
                     <?php                        
                  $job=$_GET['job'];
                         $sql=mysqli_query($con,"select * from job_vacancy where job_title='$job' OR location='$job' OR company_name='$job' OR job_type='$job' ");
                    while($row=mysqli_fetch_array($sql))
                    {
                    ?>
						<article>
							<form method="POST">
							 
							
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href=""><img src="upload/<?php echo $row['image']; ?>" class="img-responsive" alt="" /></a>
									</div>
								</div>
								<div class="col-md-5 col-sm-5">
									<div class="brows-job-position">
										<a href=""><h3><?php echo $row['company_name'];  ?></h3></a>
										<p>
											<span></span><span class="brows-job-sallery"><i class="fa fa-money"></i><?php   echo $row['salary'];  ?></span>
											<span class="job-type cl-success bg-trans-success"><?php   echo $row['position'];  ?></span>
										</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i><?php echo $row['location'];  ?></p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="" class="btn btn-default"><?php echo $row['experience'];  ?></a>
									</div>
								</div>
								<div class="col-md-1 col-sm-1">
									<div class="brows-job-link">
										<a name="details" href="job_details.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Details</a>
									</div>
								</div>
								<!--<div class="col-md-1 col-sm-1">
									<div class="brows-job-link">
										<button type="submit" name="submit" class="btn btn-success">Apply</button>
									</div>
								</div>-->
							</div>
							</form>
							<span class="tg-themetag tg-featuretag"><?php echo $row['job_title'];  ?></span>
						</article>
						<?php
						}
					
							?>
							
					</div>
				
					</div>
					
					
					
					
					
					
					
					<!--/.row-->
					<!-- <div class="row">
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li> 
							<li><a href="#">4</a></li> 
							<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li> 
							<li><a href="#">&raquo;</a></li> 
						</ul>
					</div> -->
					
				</div>
			</section>
		
                
            
			<!-- ========== Begin: Brows job Category End ===============  -->
			
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

<!-- browse-jobs41:12-->
</html>



<?php

if(isset($_POST['submit']))
{
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $jobid = $_POST['jobid'];
        $empid = $_POST['empid'];
        $cname = $_POST['cname'];
        $cemail = $_POST['email'];
        $cmob = $_POST['mob'];
        $cloc = $_POST['loca'];
        $cqual = $_POST['quali'];
        $cexp = $_POST['exp'];
        $cskill = $_POST['skill'];
        
        $q2 = "INSERT INTO `candidate_jobapp`(`candidate_ID`, `job_id`,`emp_id`, `can_name`, `can_email`, `can_mob`, `can_loc`, `can_quali`, `can_exp`, `can_skill`,`cjobstatus`) VALUES ('$id','$jobid','$empid','$cname','$cemail','$cmob','$cloc','$cqual','$cexp','$cskill','pending')";
        $query1 = mysqli_query($con,$q2);
        
        if($query1)
        {
            echo "<script type='text/javascript'>
            alert('Thank you for applying the job ...')
            </script>";
            
        }
        else
        {
           echo mysqli_error($con);
            
        }
    }
    else
    {
        header('location:login.php');

    }

    
}




?>