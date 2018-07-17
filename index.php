<?php
error_reporting(1);
session_start();
include "function.php";
login();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Shwe Myanmar Jobs</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media-query.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">

	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
        <!-- <script src="js/vue.js"></script> -->
	

</head>
<body>
	 
	<!-- nav bar -->
<div id="myapp">

	<nav class="navbar navbar-toggleable-md navbar-light bg-faded custom-nav-bg">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand custom-navbar-brand" href="index.php"><!-- <img class="logopng" src="img/default.png"> --><span>Shwe</span> Myanmar Jobs</a>
	  <!-- <span><a href="mailto:myochitmaung2018@gmail.com">myochitmaung@gmail.com</a></span> -->
 
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="about.php">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="view-all-job.php">View All Jobs</a>
	      </li>
	    </ul>
	    
	    <!-- <form class="form-inline my-2 my-lg-0">
	      <button class="btn btn-primary my-2 my-sm-0" type="submit">Post A Job</button>
	      <a href="#" class="post-btn">Post A Job</a>
	    </form> -->
<?php	    
if (isset($_SESSION['emailss'])) {?>
   <div class="admin-email">
   	 <a href="admin/index.php"><?php echo $_SESSION['emailss'];?></a>
   </div>
		 
<?php }

else {?>
	<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary post-btn" data-toggle="modal" data-target="#exampleModal">
		  Sign In
		</button>
<?php }
?>
	    

		<!-- Modal -->
		<?php include 'modal.php'; ?>
	   
	  </div>
	</nav>


	<!-- Jumbotron -->
	<div class="jumbotron">
		<div class="jumbotron-width">
			<p class="lead">Over Thousand Jobs Are <br> Waiting For You</p>
		  
		</div>
		<div class="sub-jumbotron">
			<div class="row sub-row">
				<div class="col-sm-6 sub-jumbotron-aboutus">
					<h5>What We Do</h5>
					<p><a href='about.php'> About Us</a></p>
				</div>
				<div class="col-sm-6 sub-jumbotron-aboutus">
					<h5>To Get Higher Salary</h5>
					<p><a href='view-all-job.php'>Find A Job</a></p>
				</div>
				
			</div>
			
		</div>	
	</div>	


	<!-- Jobs in Agency -->
	<div class="company-job">
		<h3>Jobs on Facebook</h3>
		<div class="sub-company-job">
			<div class="row" v-for="eachAg in jobAg">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<!-- <h6 class="no-center">Job Title/Company Name</h6> -->
					<div class="job-title-n-name agnecy">
						<div class="job-logo">
							<img v-bind:src="'image/' + eachAg.agency_logo">
						</div>
						<div class="job-tn">
							<div class="job-title" id="ag-job-title">
								<a :href="'show.php?clickId='+eachAg.job_id" target="_blank"> {{ eachAg.job_position1 }} 
								</a>
							</div>
							<div class="job-company"><a :href="'show.php?clickId='+eachAg.job_id" target="_blank">{{ eachAg.agency_name }}</a></div>
						</div>
						
					</div>

				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<!-- <h6>Type</h6> -->
					<div class="type agency">
						<div :class="{full : true, part : (eachAg.job_type === 'part-time') ? true : false}"><span>{{ eachAg.job_type }}</span></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<!-- <h6>Date Posted</h6> -->
					<div class="date agency">
						<div><span>{{ eachAg.job_post_date2 }}</span></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<!-- <h6>Job Location</h6> -->
					<div class="location agency">
						<div><span>{{ eachAg.job_city }}</span></div>
					</div>
				</div>

			</div>
			<p><a href='view-all-job.php'> View All Jobs </a></p>
		</div>
	</div>

<!-- Categories -->
	<div class="categories" id="mycategory">
		<div class="sub-categories">
			<h3>Browse Categories</h3>
				<div class="row">
					<div class="col-md-4 col-sm-6" v-for="eachCat in jobCat">
						<div class="cat">
								<span><i :class="'far ' + eachCat.category_svg"></i></span>
								<p><a :href="'view-all-job.php?clickCategory='+eachCat.category_name"  :value="eachCat.category_name">{{ eachCat.category_name }}</a></p>
						</div>
					</div>
					
				</div>
		</div>
		
		
	</div>

	
	<!-- Find With Company/Agency -->
	<div class="find">
		<div class="sub-find">
			<h3>Top Company/Agency</h3>

			<!-- carouse2 -->
			<div class="container text-center my-3">
			    <!-- <h5>Agency Name</h5> -->
			    <div class="row mx-auto my-auto">
			        <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
			            <div class="carousel-inner w-100" role="listbox">
			                			    
			                <div class="carousel-item active">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/Asia Speed.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/cj.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/crown.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/jas.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/jg.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/jm.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/job and career.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/job media.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/job site yangon.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/job trust.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/job zone agency.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/job-myanmar-local-employment-agency.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/lin yaung chi.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/naturalpriority.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/new-yoe-mandalay.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/racy star.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/work bridge.jpg">
			                	</div>
			                </div>
			                <div class="carousel-item">
			                    <div class="sub-carousel-item">
			                		<img class="d-block col-3 img-fluid" src="image/northern.jpg">
			                	</div>
			                </div>

			                
			            </div>
			            <a class="carousel-control-prev" href="#recipeCarousel2" role="button" data-slide="prev">
			                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			                <span class="sr-only">Previous</span>
			            </a>
			            <a class="carousel-control-next" href="#recipeCarousel2" role="button" data-slide="next">
			                <span class="carousel-control-next-icon" aria-hidden="true"></span>
			                <span class="sr-only">Next</span>
			            </a>
			        </div>
			    </div>
			 
			</div>

		</div>
		
	</div>

<!-- Download -->
	<div class="download">
		<p>You Can Download in <span>Google Play</span> and <span>APK Download Link</span></p>
		<div class="google-apk">
			<div class="google-play">
				<img src="img/google-play.png">
				<p>Google Play</p>
			</div>
			<div class="apk">
				<img src="img/android.png">
				<p>APK Download</p>
			</div>
		</div>
	</div>

<!-- Footer -->
	<div class="footer">
		<div class="row sub-footer">
			<div class="col-md-4">
				<h5>Local Job Collection</h5>
				<p><a href="index.php">Home</a></p>
				<p><a href="about.php">About Us</a></p>
				<!-- <p><a href="#">Contact Us</a></p> -->
			</div>
			<div class="col-md-4">
				<h5>Browse Search</h5>
				<p><a href="view-all-job.php">Find More Jobs</a></p>
				
			</div>
			<div class="col-md-4">
				<h5>Social Network</h5>
				<!-- <div class="facebook">
					<p><img src="img/facebook.png"><a href='#'>Facebook</a></p>
				</div> -->
				<div class="messenger">
					<p><img src="img/messenger.png"><a target="_blank" href='https://m.facebook.com/messages/compose?ids=100024479812586'>Messenger</a></p>
				</div>
				<div class="email">
					<p><img src="img/mail.png"><a href="mailto:myochitmaung2018@gmail.com">Email</a></p>
				</div>
			</div>
		</div>
	</div>
</div>	
	<!-- font awesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
	<!-- ./font awesome -->
	
	

	<!-- jquery link -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	<script type="text/javascript" src="js/myVue.js"></script>
	
	<script>
		// Carousel two ( for agency )
		$('#recipeCarousel2').carousel({
		  interval: 10000
		})

		$('#recipeCarousel2 .carousel-item').each(function(){
		    var next = $(this).next();
		    if (!next.length) {
		    next = $(this).siblings(':first');
		    }
		    next.children(':first-child').clone().appendTo($(this));
		    
		    for (var i=0;i<2;i++) {
		        next=next.next();
		        if (!next.length) {
		          next = $(this).siblings(':first');
		        }
		        
		        next.children(':first-child').clone().appendTo($(this));
		      }
		});
		

</script>
</body>
</html>


<?php 
delete();
?>