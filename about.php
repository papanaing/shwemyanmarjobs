<?php
error_reporting(1);
session_start();
include "function.php";
login();
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media-query.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
	<!-- <script type="text/javascript" src="admin/admin-style.css"></script> -->
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

	
	<div class="about-container">
		<h3>Our About As</h3>
		<p>- Shwe Myanmar Job Site ရဲ႕ ရည္ရြယ္ခ်က္ကေတာ့ အလုပ္တင္လိုေသာ Company (သို႕) Agency မ်ားအတြက္အလြယ္တကူတင္ႏုိင္သည့္အျပင္ အလုပ္ရွာေဖြသူမ်ားအတြက္လည္း အဆင္ေျပစြာရွာေဖြဖို႔အတြက္ တည္ေဆာက္ထားျခင္းျဖစ္ပါသည္။<br>
        - တစ္စံုတစ္ရာအခက္အခဲရွိပါက myochitmaung2018@gmail.com သို႔ ေပးပို႕ႏုိင္ပါသည္။

		 </p>
	</div>


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
						<p><img src="img/mail.png"><a href='#'>Email</a></p>
					</div>
				</div>
			</div>
	</div>
</div>	





<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	<script type="text/javascript" src="js/myVue.js"></script>
</body>
</html>