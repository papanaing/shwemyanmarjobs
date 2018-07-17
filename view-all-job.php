<!-- view coal -->
<?php
error_reporting(1);
session_start();
include "function.php";
login();
?>
<!DOCTYPE html>
<html>
<head>
	<title>View All Jobs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/viewall.css">
	<link rel="stylesheet" type="text/css" href="css/media-query.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">

	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
</head>
<body>
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

		

		<div class="view-all-container">
			<!-- search -->
			<div class="row">
				<div class="col-md-3 filter">
					<a href="view-all-job.php">Reset Filter</a>
				</div>
				<div class="col-md-6">
					<form class="custom-form-inline view-search">
						<!-- <h6>Your Search For - {{ searchJob }}</h6> -->
					    <input class="custom-form-control mr-sm-2" type="text" placeholder="Search Job Title" v-model:value="searchJob">
					    
					    <!-- <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button> -->
					</form>
				</div>
				
			</div>
			
			<div class="row sub-view-all-container">
				<div class="col-md-3">
					<!-- row 1 -->
					<div id="accordion">
					  <div class="card">
					    <div class="card-header" id="headingOne">
					      <h5 class="mb-0">
					        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          Job Location
					        </button>
					      </h5>
					    </div>

					    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					      <div class="card-body">

					      	<!-- for loop for city location -->
					        <div class="form-check" v-for="eachCity in jobCity">
							  <input 
							  class="form-check-input" 
							  type="checkbox" 
							  v-bind:value="eachCity.job_city_location_name" 
							  name="CITYNAME"
							  v-model="filterCity"
							  id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
							    {{ eachCity.job_city_location_name }}
							  </label>
							</div>

					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="headingTwo">
					      <h5 class="mb-0">
					        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          Job Categories
					        </button>
					      </h5>
					    </div>
					    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					      <div class="card-body">

					        <!-- for loop for job categories -->
					        <div id="loopCate" class="form-check clickcate" v-for="eachCat in jobCat">
							  <input class="form-check-input" type="checkbox" :value="eachCat.category_name" v-model="filterCate" id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
							    {{ eachCat.category_name }}
							  </label>
							</div>

					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="headingThree">
					      <h5 class="mb-0">
					        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          Job Types
					        </button>
					      </h5>
					    </div>
					    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					      <div class="card-body">

					        <!-- for loop for job type -->
					        <div class="form-check" v-for="eachType in jobType">
							  <input class="form-check-input" type="checkbox" :value="eachType.job_type_name" v-model='filterTime' id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
							    {{ eachType.job_type_name }}
							  </label>
							</div>

					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="headingFour">
					      <h5 class="mb-0">
					        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					         Date Posted
					        </button>
					      </h5>
					    </div>
					    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
					      <div class="card-body">
					        
					        <!-- for loop for job type -->
					        <div class="form-check" v-for="eachDate in datePosted">
							  <input class="form-check-input" type="radio" name="data-radio" v-model="filterDate" :value="eachDate.date_posted_day">
							  <label class="form-check-label">
							    {{ eachDate.date_posted_day }}
							  </label>
							</div>

					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-md-9">
					<!-- row 2 -->
				<!-- Tab panes -->
					<div class="tab-content">
					  	<div role="tabpanel" class="tab-pane fade-in active" id="agency">

					  	<!-- Agency Job Appear -->
					  		<div class="sub-company-job second">
					  			<!-- <h6>All Jobs - 565</h6> -->
					  			<div class="row Search">
					  				<div class="col-md-3">
					  					<span>Search City - {{ filterCity }}</span>
					  				</div>
					  				<div class="col-md-3">
					  					<span>Search Category - {{ filterCate }}</span>
					  				</div>
					  				<div class="col-md-3">
					  					<span>Search Job Type - {{ filterTime }}</span>
					  				</div>
					  				<div class="col-md-3">
					  					<span>Search Post Date - {{ filterDate }}</span>
					  				</div>
					  				
						  			
					  			</div>
					  			
					  			
					  			
								<div class="row" v-for="eachAg in filterAgencyJob">
									<div class="col-lg-6 col-md-6 col-sm-6">
										
										<div class="job-title-n-name agnecy">
											<div class="job-logo">
												<img v-bind:src="'image/' + eachAg.agency_logo">
											</div>
											<div class="job-tn">
												<div class="job-title" id="ag-job-title"><a :href="'show.php?clickId='+eachAg.job_id" target="_blank"> {{ eachAg.job_position1 }} 
												</a></div>
												<div class="job-company"><a :href="'show.php?clickId='+eachAg.job_id" target="_blank">{{ eachAg.agency_name }}</a></div>

											</div>
											
										</div>

									</div>
									<div class="col-lg-2 col-md-2 col-sm-6">
										
										<div class="type agency">
											<div :class="{full : true, part : (eachAg.job_type === 'part-time') ? true : false}"><span>{{ eachAg.job_type }}</span></div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6">
										
										<div class="date agency">
											<div><span>{{ eachAg.job_post_date2 }}</span></div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6">
										
										<div class="location agency">
											<div><span>{{ eachAg.job_city }}</span></div>
										</div>
									</div>

								</div>
								<p><a @click="showMoreJobs">Show More + </a></p>
							</div>

					  	</div>

					  	<!-- <div role="tabpanel" class="tab-pane fade" id="agency">
					  		
					  		
					  	</div> -->
					</div>
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
					<p><img src="img/messenger.png"><a href='https://m.facebook.com/messages/compose?ids=100024479812586' target="_blank">Messenger</a></p>
				</div>
				<div class="email">
					<p><img src="img/mail.png"><a href="mailto:myochitmaung2018@gmail.com">Email</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>



<!-- moment.js -->
	<script type="text/javascript" src="js/moment.js"></script>
	
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
	<script type="text/javascript">
		
	</script>
	<script type="text/javascript" src="js/myVue.js"></script>

	
</body>
</html>

