<?php
session_start();
ob_start();
include('connection.php');

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs==================================================-->
    <title>Saraswathichandra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS==================================================-->
    <link rel="stylesheet" href="assets/plugins/css/plugins.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="script1.js"></script>
    <script type="text/javascript" src="script2.js"></script>
    <!-- <script type="text/javascript">
    history.pushState(null,null,'index.php');
    window.addEventListener('popstate',function(event)
    {
        history.pushState(null,null,'index.php');
    });
</script> -->
<style type="text/css">
    .tab { 
background-color: #f1f1f1;}

.tabcontent {display: none; padding: 6px 12px; border: 1px solid #ccc;
    border-top: none;}
    
.tab button {background-color: inherit; float: left; border: none;
    outline: none; cursor: pointer; padding: 14px 16px; 
    transition: 0.3s;}
    
.tab button:hover {background-color: #ddd;}

.tab .active {background-color: #ccc;}

.tabcontent {display: none; padding: 6px 12px;

border: 1px solid #ccc; border-top: none;}

table {font-family: arial, sans-serif; border-collapse: collapse;
    width: 100%;}



/*Change color to gray*/
tr:nth-child(even) {
    background-color: #dddddd;}

.actived a{color:green}
.actived a:hover{ font-weight: bold}

.deactivated a{color:red}
.deactivated a:hover{ font-weight: bold}

.available {color:green; }
.disable{ color: red; font-weight: bold}
.intraining{color: blue; font-weight: bold}
.vacation{ font-weight: bold}

</style>
<script type="text/javascript">
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";}
        
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");}

    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";}
</script>
</head>

<body>

<div class="wrapper">
    <?php
    
    include 'userheader.php';
    
    ?>
<!-- <div id="home" class="tabcontent">

       
 
 <?php 
     //$sql=mysqli_query($con,"SELECT * from job_title ");
     $sql1=mysqli_query($con,"SELECT `cmp_name`,'location',COUNT(*) FROM `emp_reg`");
//$r1 = mysqli_fetch_array($sql1);



     
while($r1=mysqli_fetch_array($sql1))
{
?>
<div class="col-md-4">
  <a href="sector.php?id=<?php echo $r1['cmp_name'];?>"><?php echo $r1['0'];  ?>(<span><?php echo $r1[1]; ?></span>)</a>
  </div>
<?php
}
?>

</div> -->

<!-- <div id="Fruits" class="tabcontent">
  
  <?php 
     $sql=mysqli_query($con,"SELECT * from job_city ORDER BY city ASC");
while($row=mysqli_fetch_array($sql))
{
?>
<div class="col-md-4">
  <a href="sector.php?id=<?php echo $row['city'];?>"><?php   echo $row['city'];  ?></a>
  </div>
<?php
}
?>
</div> -->

<!-- <div id="Workers" class="tabcontent">
     <?php 
     $sql=mysqli_query($con,"SELECT * from job_company ORDER BY cname ASC");
while($row=mysqli_fetch_array($sql))
{
?>
<div class="col-md-4">
 <a href="sector.php?id=<?php echo $row['cname'];?>"><?php   echo $row['cname'];  ?></a>
  </div>
<?php
}
?>
</div>
 -->

<!-- <div id="Services" class="tabcontent">

       
 
 <?php 
     //$sql=mysqli_query($con,"SELECT * from job_title ");
     $sql1=mysqli_query($con,"SELECT `jobtitle`,COUNT(*) FROM `job_reg` GROUP BY `jobtitle`");
//$r1 = mysqli_fetch_array($sql1);



while($r1=mysqli_fetch_array($sql1))
{
?>
<div class="col-md-4">
  <a href="sector.php?id=<?php echo $r1['jobtitle'];?>"><?php echo $r1['0'];  ?>(<span><?php echo $r1[1]; ?></span>)</a>
  </div>
<?php
}
?>

</div> -->
<!-- <div id="Job" class="tabcontent">

       
 
 <?php 
     //$sql=mysqli_query($con,"SELECT * from job_title ");
     $sql1=mysqli_query($con,"SELECT `pos`,COUNT(*) FROM `job_reg` GROUP BY `pos`");
//$r1 = mysqli_fetch_array($sql1);



     
while($r1=mysqli_fetch_array($sql1))
{
?>
<div class="col-md-4">
  <a href="sector.php?id=<?php echo $r1['pos'];?>"><?php echo $r1['0'];  ?>(<span><?php echo $r1[1]; ?></span>)</a>
  </div>
<?php
}
?>

</div> -->
</div>
                            </li>
                        </ul>
                    </li>
                   
                </ul>

                 
              
            </div>
        </div>
    </nav>
    <div class="clearfix"></div>
          <div class="banner" style="background-image:url(assets/img/banner-9.jpg);">
            <div class="container">
              <div class="banner-caption">
                <div class="col-md-12 col-sm-12 banner-text">
                  <h3 style="color:white">Search Company Reviews and Ratings</h3>

                 <div class="container">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home" style="color: greenyellow"><b>Job</b></a></li>
                      <li><a data-toggle="tab" href="#menu1" style="color:greenyellow"><b>Company</b></a></li>
                      <li><a data-toggle="tab" href="#menu2" style="color:greenyellow"><b>Salary</b></a></li>
                      
                    </ul> 
                     <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                        <form class="form-horizontal" method="POST" action="">
                          <div class="col-md-1"></div>
                          <div class="col-md-4 no-padd">
                            <div class="input-group">
                              <input type="text" class="form-control right-bor" name="search" id="search" placeholder="Search By Job Title">
                              <datalist>
                              <?php
                                        $get_driver = "select * from emp_reg";
                                        $run_driver = mysqli_query($con, $get_driver);
                                        while ($row_name = mysqli_fetch_array($run_driver))
                                        {
                                        
                                          $cmp_name = $row_name['cmp_name'];
                                         
                                          echo "<option value='$cmp_name'></option>";
                                        }
                                    ?>
                                    </datalist>
                            </div>
                          </div>
                          <div class="col-md-4 no-padd">
                            <div class="input-group">
                              <input type="text" class="form-control right-bor" name="search1" id="search1" placeholder="Search By Location..">
                              <datalist>
                               <?php
                                         $get_driver = "select * from emp_reg";
                                        $run_driver = mysqli_query($con, $get_driver);
                                        while ($row_loc = mysqli_fetch_array($run_driver))
                                        {
                                          $location = $row_loc['location'];
                                         
                                          echo "<option value='$location'></option>";
                                        }
                                    ?>
                                    </datalist>
                            </div>
                          </div>
                          <!-- <div class="col-md-3 no-padd">
                            <div class="input-group">
                              <input type="text" class="form-control right-bor" name="search2" id="search2" placeholder="Search By Skill..">
                            </div>
                          </div> -->
                          <div class="col-md-2 no-padd">
                            <div class="input-group">
                              <button type="submit" name="btnsearch" class="btn btn-primary">Search</button>
                            </div>
                          </div>
                           <div class="col-md-1"></div>
                        </form>
                      </div>
                     <div id="menu1" class="tab-pane fade">
                        <form class="form-horizontal" method="POST">
                          <div class="col-md-1"></div>
                          <div class="col-md-4 no-padd">
                            <div class="input-group">
                              <input type="text" class="form-control right-bor" name="search" id="search" placeholder="Search By Job Title or company">
                            </div>
                          </div>
                          <div class="col-md-4 no-padd">
                            <div class="input-group">
                              <input type="text" class="form-control right-bor" name="search1" id="search1" placeholder="Search By Location..">
                            </div>
                          </div>
                          <!-- <div class="col-md-3 no-padd">
                            <div class="input-group">
                              <input type="text" class="form-control right-bor" name="search2" id="search2" placeholder="Search By Skill..">
                            </div>
                          </div> -->
                          <div class="col-md-2 no-padd">
                            <div class="input-group">
                              <button type="submit" name="btnsearch" class="btn btn-primary">Search</button>
                            </div>
                          </div>
                          <div class="col-md-1"></div>
                        </form>
                      </div>
                      <div id="menu2" class="tab-pane fade">
                        <form class="form-horizontal" method="POST">
                          <div class="col-md-1"></div>
                          <div class="col-md-4 no-padd">
                            <div class="input-group">
                              <input type="text" class="form-control right-bor" name="search" id="search" placeholder="Search By Job Title or company">
                            </div>
                          </div>
                          <div class="col-md-4 no-padd">
                            <div class="input-group">
                              <input type="text" class="form-control right-bor" name="search1" id="search1" placeholder="Search By Location..">
                            </div>
                          </div>
                          <!-- <div class="col-md-3 no-padd">
                            <div class="input-group">
                              <input type="text" class="form-control right-bor" name="search2" id="search2" placeholder="Search By Skill..">
                            </div>
                          </div> -->
                          <div class="col-md-2 no-padd">
                            <div class="input-group">
                              <button type="submit" name="btnsearch" class="btn btn-primary">Search</button>
                            </div>
                          </div>
                          <div class="col-md-1"></div>
                        </form>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>






   <div class="clearfix"></div>
   <div class="container-fluid" style="padding:20px">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card text-center" style="-webkit-box-shadow: 0 0 10px 0 rgba(88,96,109,.14);transition: .4s;border: 1px solid #eaeff5;background: #fff;border-radius: 6px;">
            <img class="card-img-top" src="assets/img/s1.jpg" alt="Card image cap" style="width:100%">
            <div class="card-body" style="padding: 40px;">
              <h5 class="card-title"> Employees' Choice Awards 2019</h5>
              <p class="card-text">Glassdoor's annual Employees' Choice Awards honor the Best Places to Work across North America and parts of Europe.</p>
              <a href="#" class="btn btn-success">See the 2019 List</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center" style="-webkit-box-shadow: 0 0 10px 0 rgba(88,96,109,.14);transition: .4s;border: 1px solid #eaeff5;background: #fff;border-radius: 6px;">
            <img class="card-img-top" src="assets/img/s2.jpg" alt="Card image cap" style="width:100%">
            <div class="card-body" style="padding: 40px;">
              <h5 class="card-title"> Do Race & Gender Play a Role in Salary Negotiations? A New Study Says Yes</h5>
              <p class="card-text">Making the case for a promotion or raise is a nerve-wracking process for any employee, but is it a fair playing field...</p>
              <a href="#" class="btn btn-success">Read Blog Post</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center" style="-webkit-box-shadow: 0 0 10px 0 rgba(88,96,109,.14);transition: .4s;border: 1px solid #eaeff5;background: #fff;border-radius: 6px;">
            <img class="card-img-top" src="assets/img/s3.jpg" alt="Card image cap" style="width:100%">
            <div class="card-body" style="padding: 40px;">
              <h5 class="card-title">7 Types of Companies You Should Never Work For</h5>
             <p class="card-text"> No matter how desperate you are for a job, or how annoyed you may be at your current gig, there are some companies you’re better off not </p>
              <a href="#" class="btn btn-success">Reading the Blog</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
    
    <!--<div class="clearfix"></div>
    <section class="video-sec dark" id="video" style="background-image:url(assets/img/banner-10.jpg);">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>Best For Your Projects</p>

                    <h2>Watch Our <span>video</span></h2>
                </div>
            </div>
            <div class="video-part"><a href="https://www.youtube.com/watch?v=5pPVIQe8LUY" target="_blank" data-toggle="modal" data-target="#my-video" class="video-btn"><i
                    class="fa fa-play"></i></a></div>
        </div>
    </section> -->
    <div class="clearfix"></div>
    <!-- <section class="how-it-works">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="main-heading">
                        <p>Working Process</p>

                        <h2>How It <span>Works</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-1.png" class="img-responsive" alt=""/><span
                                class="process-num">01</span></span>
                        <h4>Create Your Resume</h4>

                        <p>Every month, thousands of employers are looking for new talent*. Over thousand employers have contacted candidates just like you by using Sarswatichandraglobal Resume.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-2.png" class="img-responsive" alt=""/><span
                                class="process-num">02</span></span>
                        <h4>Apply for Your Jobs</h4>

                        <p>Apply Online jobs available on Sarswatichandraglobal Immediate Openings For Part Time and Full Time /job 10th,12th Pass Candidates.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-3.png" class="img-responsive" alt=""/><span
                                class="process-num">03</span></span>
                        <h4>Hired Now</h4>

                        <p>Begin the search for your next job now on Sarswatichandraglobal today. Find Reviews and Salaries. Easy Resume Upload.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>What Say Our Client</p>

                    <h2>Our Success <span>Stories</span></h2>
                </div>
            </div>
            <div class="row">
                <div id="client-testimonial-slider" class="owl-carousel">
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
                        <p class="client-description">I would like to thank Saraswathichandra team for the great amount of support that they have provided. </p>

                        <h3 class="client-testimonial-title">Shiraj</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-2.jpg" alt=""></div>
                        <p class="client-description">I would like to thank Saraswathichandra team for the great amount of support that they have provided.</p>

                        <h3 class="client-testimonial-title">Karan Wessi</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-3.jpg" alt=""></div>
                        <p class="client-description">I would like to thank Saraswathichandra team for the great amount of support that they have provided.</p>

                        <h3 class="client-testimonial-title">Roul Pinchai</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
                        <p class="client-description">I would like to thank Saraswathichandra team for the great amount of support that they have provided.</p>

                        <h3 class="client-testimonial-title">Adam Jinna</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <p>Top Freelancer</p>

                        <h2>Hire Expert <span>Freelancer</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="freelance-container style-2">
                        <div class="freelance-box">
                            <span class="freelance-status">Available</span>
                            <h4 class="flc-rate">$17/hr</h4>

                            <div class="freelance-inner-box">
                                <div class="freelance-box-thumb"><img src="assets/img/can-5.jpg"
                                                                      class="img-responsive img-circle" alt=""/></div>
                                <div class="freelance-box-detail">
                                    <h4>Agustin L. Smith</h4>
                                    <span class="location">Australia</span>
                                </div>
                                <div class="rattings"><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i
                                        class="fa fa-star fill"></i><i class="fa fa-star-half fill"></i><i
                                        class="fa fa-star"></i></div>
                            </div>
                            <div class="freelance-box-extra">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                <ul>
                                    <li>Php</li>
                                    <li>Android</li>
                                    <li>Html</li>
                                    <li class="more-skill bg-primary">+3</li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-freelance-two bg-default">View Detail</a><a
                                href="#" class="btn btn-freelance-two bg-info">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="freelance-container style-2">
                        <div class="freelance-box">
                            <span class="freelance-status bg-warning">At Work</span>
                            <h4 class="flc-rate">$22/hr</h4>

                            <div class="freelance-inner-box">
                                <div class="freelance-box-thumb"><img src="assets/img/can-5.jpg"
                                                                      class="img-responsive img-circle" alt=""/></div>
                                <div class="freelance-box-detail">
                                    <h4>Delores R. Williams</h4>
                                    <span class="location">United States</span>
                                </div>
                                <div class="rattings"><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i
                                        class="fa fa-star fill"></i><i class="fa fa-star-half fill"></i><i
                                        class="fa fa-star"></i></div>
                            </div>
                            <div class="freelance-box-extra">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                <ul>
                                    <li>Php</li>
                                    <li>Android</li>
                                    <li>Html</li>
                                    <li class="more-skill bg-primary">+3</li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-freelance-two bg-default">View Detail</a><a
                                href="#" class="btn btn-freelance-two bg-info">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="freelance-container style-2">
                        <div class="freelance-box">
                            <span class="freelance-status">Available</span>
                            <h4 class="flc-rate">$19/hr</h4>

                            <div class="freelance-inner-box">
                                <div class="freelance-box-thumb"><img src="assets/img/can-5.jpg"
                                                                      class="img-responsive img-circle" alt=""/></div>
                                <div class="freelance-box-detail">
                                    <h4>Daniel Disroyer</h4>
                                    <span class="location">Bangladesh</span>
                                </div>
                                <div class="rattings"><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i
                                        class="fa fa-star fill"></i><i class="fa fa-star-half fill"></i><i
                                        class="fa fa-star"></i></div>
                            </div>
                            <div class="freelance-box-extra">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                <ul>
                                    <li>Php</li>
                                    <li>Android</li>
                                    <li>Html</li>
                                    <li class="more-skill bg-primary">+3</li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-freelance-two bg-default">View Detail</a><a
                                href="#" class="btn btn-freelance-two bg-info">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center"><a href="#" class="btn btn-primary">Load More</a></div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <section class="download-app" style="background-image:url(assets/img/banner-7.jpg);">
        <div class="container">
            <div class="col-md-5 col-sm-5 hidden-xs"><img src="assets/img/iphone.png" alt="iphone"
                                                          class="img-responsive"/></div>
            <div class="col-md-7 col-sm-7">
                <div class="app-content">
                    <h2>Coming soon Best Apps</h2>
                    <h4>Best oppertunity in your hand</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui
                        non, semper orci. Curabitur blandit, diam ut ornare ultricies.</p>
                    <a href="#" class="btn call-btn"><i class="fa fa-apple"></i>Coming Soon</a><a href="#"
                                                                                               class="btn call-btn"><i
                        class="fa fa-android"></i>Coming Soon</a>
                </div>
            </div>
        </div>
    </section>
   
    <div class="clearfix"></div> -->
    <?php
    include('footer.php');
    ?>
    <div class="clearfix"></div>
    <!-- <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign
                                In</a></li>
                            <li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
                        </ul>
                        <div class="tab-content" id="myModalLabel2">
                            <div role="tabpanel" class="tab-pane fade in active" id="login">
                                <img src="assets/img/logo/log.png" class="img-responsive" alt=""/>

                                <div class="subscribe wow fadeInUp">
                                    <form class="form-inline" method="post">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                       placeholder="Username" required="">
                                                       <input type="password" class="form-control" placeholder="Password"  name="password" required="">                                                                                                                                                                 
                                                 

                                                <div class="center">
                                                <input type="submit" name="submit" class="submit-btn" value="Login">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="register">
                                <img src="assets/img/logo/log.png" class="img-responsive" alt=""/>
                                <?php if($msg !=''){?> <div class="alert alert-success"><b><?php echo $msg?></b> </div><?php }?>
                                <form class="form-inline" method="post">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required="">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                         <input type="text" name="password" class="form-control" placeholder="Password" required="">
                                         <input type="text" name="password1" class="form-control" placeholder="Confirm Password" required="">
                                        

                                            <div class="center">
                                            <input type="submit" name="submit" value="Create Account" class="submit-btn">
                                                
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
    </div> -->
   
    <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
        <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
        <ul id="styleOptions" title="switch styling">
            <li><a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a></li>
            <li><a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a></li>
            <li><a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a></li>
        </ul>
    </div>
    <!-- Scripts==================================================-->
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
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jQuery.style.switcher.js"></script>
    <script type="text/javascript">$(document).ready(function () {
        $('#styleOptions').styleSwitcher();
    });</script>
    <script>function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }
    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }</script>
</div>

</body>

</html>
<?php 
  if(isset($_POST['btnsearch'])){
    $search=$_POST['search'];
    $search1=$_POST['search1'];
    $select="select * from emp_reg where cmp_name='$search' and location='$search1'";
    $display=mysqli_query($con,$select) or die(mysqli_error($con));
    if($display){
      $_SESSION['cmp_name'] =$search;
       $_SESSION['location']= $search1;
      echo "<script>
              window.location='company-profile.php';
      </script>";
    }else{
      echo "<script>
              alert('failed');
      </script>";
    }
  }
?>







<!-- <?php
 
 if(isset($_POST['btnsearch']))
 {

     
     $comname = $_POST['search'];
     $comloc = $_POST['search1'];
     /*$jobskill = $_POST['search2'];*/
     
     if(empty($comname) && empty($comloc))
     {
         echo "<script type='text/javascript'>
     alert('Please enter any keyword to search')
     </script>";
         die();
         
     }
     if(!empty($comname) && !empty($comloc))
     {
         $_SESSION["jtitle"] = $comname;
         $_SESSION["jloc"] = $comloc;
         header('location:company-profile.php'); 
        
     }
     
     if(!empty($comname))
     {
          $_SESSION["jtitle"] = $comname;
     }
     if(!empty($comloc))
     {
          $_SESSION["comloc"] = $comloc;
     }
     /*if(!empty($jobskill))
     {
           $_SESSION["jskill"] = $jobskill;
     }*/
     header('location:company-profile.php');  
 }
                                                
?> -->
