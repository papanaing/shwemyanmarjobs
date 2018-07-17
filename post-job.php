
<?php
include 'function.php';

   
    error_reporting(1);
    session_start(); 
    
    if(!isset($_SESSION['emailss'])){
        echo "<div id='login_check'>";
        echo 'Please Sign In';
        echo "<br>";
        echo "<a href='index.php'>Click to Sign In</a>";
        echo "</div>";
    }
    else {
        $now = time();
        if($now > $_SESSION['expire']){
            session_destroy();
            echo "<div id='login_check'>";
            echo "Your session has expired ";
            echo "<br>";
            echo "<a href='index.php'>click here to login</a>";
            echo "</div>";
        }
        else{
?>


<!DOCTYPE html>
<html>
<head>
	<title>Post A Job</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/post.css">
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
					 
			<?php } ?>

		  </div>
		</nav>
		
		<div class="post-container">
			<h3 class="post-heading" style="width: 15rem;">Post Jobs</h3>
			<div class="post-container2">
			<div class="row">
					<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label for="name">Post Date</label>
							    <input required type="date" class="form-control" id="name" name="DATE" style="width: 20rem;">
							</div>
						</div>
						
						
						<div class="col-md-6">
							<div class="form-group">
							    <label for="name">Job Type</label><br>
							    <select name="TYPE">
							 		<option value=''></option>
							    	<option  v-for="eachType in jobType" :value="eachType.job_type_name">{{ eachType.job_type_name }}</option>
							  	    	
							    </select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="name">Job City Location</label><br>
							    <select name="CITY">
							    	<option value=""></option>
							    	<option v-for="eachCity in jobCity" :value="eachCity.job_city_location_name">{{eachCity.job_city_location_name}}</option>
							    	    	
							    </select>
							</div>
						</div>
					
					</div>
				<!-- </div> -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="name">Job Position Name</label><br>
							    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="JOB_NAME1" placeholder="" required="1">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="name">Job Category</label><br>
							    <select name="CATE1">
							    	<option value=""></option>
							    	<option v-for="eachCat in jobCat" :value="eachCat.category_name">{{eachCat.category_name}}</option>
							    </select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
							    <label for="name">Job Description</label><br>
							    <textarea name="JOB_DESC1" cols="80" rows="15" id="mytextarea" required="1">
							    	
							    </textarea>
							</div>
						</div>
						<!-- <div class="col-md-12">
							<div class="form-group">
							    <label for="ori">Original Link</label><br>
							    <input type="text" class="form-control" id="ori" aria-describedby="emailHelp" name="ORI1" placeholder="">
							</div>
						</div> -->
					</div>
				</div>

			

			</div>
			<a class="submit-btn">Submit</a>
			<a href="admin/yourjob.php" class="">Cancel</a>
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


<!-- font awesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
	<!-- ./font awesome -->
	
	
	<!-- moment.js -->
	<script type="text/javascript" src="js/moment.js"></script>
	<!-- jquery link -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>

	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	<script type="text/javascript" src="js/myVue.js"></script>

	
	<!-- Post user data to sql with ajax -->
	<script type="text/javascript">

		
	
		$(".submit-btn").click(function(){
			
			var post_date_ori = $('input[name=DATE]').val();
			var post_date = moment(post_date_ori, "YYYYMMDD").fromNow();

			var agency_id = <?php post(); ?>;

			
			var job_type = $('select[name=TYPE]').val();	
			var job_city = $('select[name=CITY]').val();	

			var job_name1 = $('input[name=JOB_NAME1]').val();		
			var job_cate1 = $('select[name=CATE1]').val();	
			var job_desc1 = $('textarea[name=JOB_DESC1]').val();
			var job_ori1 = $('input[name=ORI1]').val();

			if(job_type == '' || job_city == '' || job_name1 == '' || job_cate1 =='' || job_desc1 == ''){
				alert("You need to fill the blank");
			}
			else{

		// console.log(agency_id);
			// $.post(URL,data,callback);
			$.post('post-job2.php',{agencyId:agency_id,
									postDateOri:post_date_ori,
									postDate:post_date,
									jobType:job_type,
									jobCity:job_city,

									jobName1:job_name1,
									jobCate1:job_cate1,
									jobDesc1:job_desc1,
									jobOri1:job_ori1

									
								}

									,function(data){

						// console.log(data);
						alert(data);
						var url = "admin/yourjob.php";
						window.location = url;
				});
			}
		
		});


	</script>


</body>
</html>

<?php
    }
}
?>