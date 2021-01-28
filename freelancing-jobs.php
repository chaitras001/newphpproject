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

<!-- freelancing-jobs41:50-->
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
	<body>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<?php
			include('header2.php');
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-page">
				<div class="container">
				<?php
                    
					session_start();
					ob_start();
                    include 'connection.php';
                    
                    $q1 = "SELECT COUNT(*) from `job_vacancy` where job_type='freelancer job' ";
                    $query1 = mysqli_query($con,$q1);
                    $row1 = mysqli_fetch_array($query1);
                    ?>
					
					<h2><?php echo $row1[0];  ?> jobs Found</h2>
					<p>The top freelancing website trusted by over 5 million businesses.</p>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Accordion Design Start -->
			<section class="accordion">
				<div class="container">
					
					<!-- search filter -->
					<!-- <div class="row extra-mrg">
						<div class="wrap-search-filter">
							<form>
								<div class="col-md-3 col-sm-3">
									<input type="text" class="form-control" placeholder="Anywhere...">
								</div>
								<div class="col-md-3 col-sm-3">
									<input type="text" class="form-control" placeholder="Keyword. Design, Seo..">
								</div>
								<div class="col-md-3 col-sm-3">
									<select class="selectpicker form-control" multiple title="All Categories">
										<option>Admin Support</option>
										<option>Customer Service</option>
										<option>Data Analytics</option>
										<option>Design & Creative</option>
										<option>Software Developing</option>
										<option>IT & Networking</option>
										<option>Content Writer</option>
										<option>Sales & Marketing</option>
									</select>

								</div>
								<div class="col-md-3 col-sm-3">
									<button type="submit" class="btn btn-primary full-width">Filter</button>
								</div>
							</form>
						</div>
					</div> -->
					<!-- search filter End -->
					
					<!-- Freelancers Start -->
					<form method="POST">
					<div class="row">
					<?php
	                 	if(isset($_SESSION["id"]))
	                 	{
                 		 	$q = "SELECT * FROM `job_vacancy` where job_type='freelancer job' ";
                        	$query = mysqli_query($con,$q);
                        	while($row = mysqli_fetch_array($query))
                        	{
                        ?>
					
						<!-- Single Freelancer & Premium job -->
						<div class="col-md-4 col-sm-6">
							<div class="popular-jobs-container">
								<div class="popular-jobs-box">
									<span class="popular-jobs-status bg-success"><?php echo $row['position']; ?></span>
									<h4 class="flc-rate"><?php echo $row['salary']; ?></h4>
									<div class="popular-jobs-box">
										<div class="popular-jobs-box-detail">
											<h4><?php echo $row['company_name']; ?></h4>
											<span class="desination"><?php echo $row['location'];?></span>
										</div>
									</div>
									<div class="popular-jobs-box-extra">
										<ul>
											<?php echo $row['skill'];?>
										</ul>
										<p><?php echo $row['description'];?></p>
									</div>
								</div>
								<button class="btn btn-popular-jobs bt-1"><a href="Freelancing-jobs-details.php?id=<?php echo $row['id']; ?>" >View Details</a></button>
							</div>
                        </div>
                        <?php
                        }


                         }
		                 else
		                 {
		                 	header('location:new-login-signup.php');
		                 }
                        
                        ?>


                

                        
                       
						
						
						<!-- More -->
						<!-- <div class="col-md-12 col-sm-12">
							<div class="text-center">
								<a href="#" class="btn btn-primary">Load More</a>
							</div>
						</div> -->
						
					</div>
					</form>
						
				</div>
			</section>
			<!-- Accordion Design End -->
			
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

<!-- freelancing-jobs41:50-->
</html>