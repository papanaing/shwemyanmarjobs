<!DOCTYPE html>
<html>
<head>
	<title>Post New Agency</title>
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
		      <!-- <li class="nav-item">
		        <a class="nav-link" href="#">Contact</a>
		      </li> -->
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		       <a href="view-all-job.php" class="post-btn">View All Job</a>
		    </form>
		  </div>
		</nav>
		
		
		<div class="post-container">
			<h3 class="post-heading">Company/Agency Information Sign Up Form</h3>
			<div class="post-container2">
			<div class="row">
				<div class="col-md-12">
					
					
					<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
							    <label for="name">Company (or) Agency Name</label>
							    <input type="text" class="form-control" id="name" name="NAME">
							    
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
							    <label for="logo">Logo Image</label>
							    <input type="file" id="file" class="form-control" id="logo" aria-describedby="emailHelp" name="LOGO" accept=".jpg, .jpeg, .png">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
							    <label for="email">Email Address</label>
							    <input type="email" class="form-control" id="email" name="EMAIL" placeholder="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="pwd">Password</label>
							    <input type="password" class="form-control" id="pwd" name="PWD" placeholder="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="phone">Contact No (Can set one or more number)</label>
							    <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" name="PHONE">
							</div>
						</div>
						
						
						<div class="col-md-6">
							<div class="form-group">
							    <label for="">Company (or) Agency Business Days</label><br>
							    <select name="DAYS">
							    	<option value=""></option>
							    	<option value="Mon to Fri">Mon to Fri</option>
							    	<option value="Mon to Sat">Mon to Sat</option>					    	
							    	<option value="Mon to Sat">Mon to Sun</option>					    	
							    </select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="">Company (or) Agency Business Hours</label><br>
							    <select name="HOURS">
							    	<option value=""></option>
							    	<option value="8:00 am - 5:00 pm">8:00 am - 5:00 pm</option>
							    	<option value="8:00 am - 5:00 pm">8:30 am - 4:30 pm</option>
							    	<option value="8:30 am - 5:30 pm">8:30 am - 5:30 pm</option>
							    	<option value="8:00 am - 6:00 pm">8:00 am - 6:00 pm</option>
							    	<option value="9:00 am - 5:00 pm">9:00 am - 5:00 pm</option>
							    	<option value="9:00 am - 5:30 pm">9:00 am - 5:30 pm</option>
							    	<option value="9:00 am - 6:00 pm">9:00 am - 6:00 pm</option>
							    	
							    </select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
							    <label for="fb">Company (or) Agency Facebook Address</label>
							    <input type="text" class="form-control" id="fb" aria-describedby="emailHelp" name="FACEBOOK">
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="form-group">
							    <label for="website">Company (or) Agency Website Address</label>
							    <input type="text" class="form-control" id="website" aria-describedby="emailHelp" name="WEBSITE">
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="form-group">
							    <label for="">Company (or) Agency Location Address</label><br>
							    <textarea name="LOCATION" cols="60" rows="5">
							    	
							    </textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
							    <label for="">About Company (or) Agency</label><br>
							    <textarea name="ABOUT" cols="100" rows="10">
							    	
							    </textarea>
							</div>
						</div>

					</div>
					
				</div>
			</div>	
			<a class="submit-btn btn2">Register</a>
			<!-- <a href="post-job.php" class="submit-btn">Register</a> -->
			<!-- <a href="new-agency-form.php" class="submit-btn btn2">New Agency</a><br> -->	
		</div>
		<p id="output"></p>
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

	
	
		$(".btn2").click(function(){
		

			var agency_name = $('input[name=NAME]').val();


			var agency_email = $('input[name=EMAIL]').val();
				
			var agency_password = $('input[name=PWD]').val();	
			
			var agency_phone = $('input[name=PHONE]').val();

			var input = document.getElementById("file");
			file = input.files[0].name;
			


			// var agency_website = $('input[name=WEBSITE]').val();		
			var agency_days = $('select[name=DAYS]').val();		
			var agency_facebook = $('input[name=FACEBOOK]').val();		
			var agency_website = $('input[name=WEBSITE]').val();		
			var agency_hours = $('select[name=HOURS]').val();		
			var agency_location = $('textarea[name=LOCATION]').val();		
			var agency_about = $('textarea[name=ABOUT]').val();	

			if(agency_name == '' || agency_email == '' || agency_password ==  '' ){
				alert("Please fill all blank");
				
			}
			else{


		alert(agency_name);
			$.post('new-agency-post.php',{agencyName:agency_name,
									agencyEmail:agency_email,
									agencyPassword:agency_password,
									agencyPhone:agency_phone,
									agencyLogo:file,
									// agencyWebsite:agency_website,
									agencyDays:agency_days,
									agencyFacebook:agency_facebook,
									agencyWebsite:agency_website,
									agencyHours:agency_hours,
									agencyLocation:agency_location,
									agencyAbout:agency_about
									}

									,function(data){

						// console.log(data);
						alert(data);
						// document.getElementById("output").innerHTML = data;
						var url = "admin/profile.php";
                        window.location = url;
						
				});
		}
		
		});

//for image upload
	$(".btn2").click(function(){
		var input = document.getElementById("file");
	  file = input.files[0];
	  if(file != undefined){
	    formData= new FormData();
	    // console.log(formData);
	    if(!!file.type.match(/image.*/)){
	      formData.append("image", file); //"image" must same name with dir_name in php file
	      $.ajax({
	        url: "new-agency-form.php",
	        type: "POST",
	        data: formData,
	        processData: false,
	        contentType: false,
	        success: function(data){
	            // alert('success');
	            // alert(file.name);
	        }
	      });
	    }else{
	      alert('Not a valid image!');
	    }
	  }else{
	    alert('Set Logo');
	  }
	});


	</script>

</body>
</html>

<?php

error_reporting(1);

$dir = "image/";
move_uploaded_file($_FILES["image"]["tmp_name"], $dir. $_FILES["image"]["name"]);

?>