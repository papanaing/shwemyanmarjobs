<!-- this is local file chanigng -->
<?php

error_reporting(1);
session_start();
include "function.php";
login();
?>

<?php
// $name = '';
include "db-connect.php";


// echo $_GET['clickId'];
$click = $_GET['clickId'];

mysql_query ("set character_set_results='utf8'");
$query = "SELECT * FROM job JOIN agency_info ON job.agency_id = agency_info.agency_id WHERE job.job_id = '$click'";
$result = mysql_query($query);
if(!$result){
 
    echo "query failed".mysql_error();
    
       }

    // echo $result;

while($row = mysql_fetch_assoc($result)) {
	$id = $row['agency_id'];
 	$name = $row['agency_name'];
 	$website = $row['agency_website'];
 	$logo = $row['agency_logo'];
 	$city = $row['job_city'];
 	$date = $row['job_post_date2'];
 	$about = $row['agency_about'];
 	$type = $row['job_type'];
 	$phone = $row['agency_phone'];
 	$email = $row['agency_email'];
 	$facebook = $row['agency_facebook_address'];
 	$website = $row['agency_website_address'];
 	$address = $row['agency_address'];
 	$day = $row['agency_business_day'];
 	$hour = $row['agency_business_hour'];
 	$pos1 = $row['job_position1'];
 	$desc1 = $row['job_desc1'];
 	$ori1 = $row['job_ori1'];

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Show A Job</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	
	<link rel="stylesheet" type="text/css" href="css/show.css">
        <link rel="stylesheet" type="text/css" href="css/media-query.css">

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
	<div class="show-container">
		<div class="row">
			<div class="col-md-12 heading">
				<div class="row">
					<div class="col-md-3">
						<div class="image-container">
							<img src="image/<?php echo $logo; ?>">
						</div>

					</div>
					<div class="col-md-9">
						<div>
							<h5 class="title"><?php echo $pos1; ?></h5>
							<p class="city"><?php echo $city; ?></p>
						
							<?php if($type == 'full-time') echo '<p class="full">full-time</p>'; ?>
							<?php if($type == 'part-time') echo '<p class="full part">part-time</p>'; ?>
							
							<p class="date">Date Posted - <?php echo $date; ?></p>
						</div>
					</div>
				</div>

				<div class="line"></div>
			</div>
			<div class="col-md-12 about">
				<h5>About <?php echo $name; ?></h5>
				<p><?php echo $about; ?></p>
				<div class="row info">
					<div class="col-md-6"><i class="fas fa-phone"></i>Contact No - <?php echo $phone; ?></div>
					<div class="col-md-6"><i class="fas fa-calendar-alt"></i>Business Days - <?php echo $day; ?></div>
					<div class="col-md-6"><i class="fas fa-envelope"></i>Email Address - <?php echo $email; ?></div>
					<div class="col-md-6"><i class="fas fa-clock"></i>Business Hours - <?php echo $hour; ?></div>
					<!-- <div class="col-md-6"><i class="fas fa-globe"></i>Website Address - <?php // echo $website; ?></div> -->
					<div class="col-md-12"><i class="fab fa-facebook-f"></i>Facebook Address - <a href="<?php echo $facebook; ?>"><?php echo $facebook; ?></a></div>
					<div class="col-md-12"><i class="fas fa-globe"></i>Website Address - <a href="<?php echo $website; ?>"><?php echo $website; ?></a></div>
					<div class="col-md-12"><i class="fas fa-location-arrow"></i>Location Address - <?php echo $address; ?></div>
				</div>
				<div class="line"></div>
			</div>
			<div class="col-md-12 position">
				<h5>Job Positions</h5>
				<div class="position-box">
					<div class="row">
						<div class="col-md-12 Card">
							<h6><?php echo $pos1; ?></h6>
							<div><?php echo $desc1; ?></div>
							<div><a href="<?php echo $ori1; ?>"><?php echo $ori1; ?></a></div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>

		
	</div>
	<!-- for apply form -->

		<div class="container apply">
			<h4>To Apply This Job</h4>
		  <form action="" method="post" enctype="multipart/form-data">
		    <div class="form-group row">
		      <label for="inputEmail3" class="col-sm-2 col-form-label">Email Address</label>
		      <div class="col-sm-10">
		        <input type="email" class="form-control" id="inputEmail3" name="APPLY_EMAIL" required>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number</label>
		      <div class="col-sm-10">
		        <input type="number" class="form-control" id="inputPassword3" name="APPLY_PHONE" required>
		      </div>
		    </div>

		    <div class="form-group row">
		      <label for="inputfile" class="col-sm-2 col-form-label">CV File (.docx)</label>
		      <div class="col-sm-10">
		        <input type="file" accept=".docx, .pdf, .zip" class="form-control" id="inputfile" name="cv_file" required>
		        <p>(.docx, .pdf, .zip)</p>
		      </div>

		    </div>
		  
		    <div class="form-group row">
		      <div class="offset-sm-2 col-sm-10">
		        <button type="submit" class="btn btn-primary" name="APPLY">Apply</button>
		      </div>
		    </div>
		  </form>
		</div>
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
				<div class="facebook">
					<p><img src="img/facebook.png"><a href='#'>Facebook</a></p>
				</div>
				<div class="messenger">
					<p><img src="img/messenger.png"><a href='#'>Messenger</a></p>
				</div>
				<div class="email">
					<p><img src="img/mail.png"><a href='#'>Email</a></p>
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

</body>
</html>

<!-- for apply -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
	
include "db-connect.php";
mysql_query("SET NAMES utf8");



if(isset($_POST['APPLY'])){
	$clickID = $_GET['clickId'];
	$apply_email = $_POST['APPLY_EMAIL'];
	$apply_phone = $_POST['APPLY_PHONE'];

	$cv_file = $_FILES['cv_file']['name'];
	$cv_file_temp = $_FILES['cv_file']['tmp_name'];
	move_uploaded_file($cv_file_temp, "upload_cv/$cv_file");
	// echo $id;

   		
   	$query_apply = "INSERT INTO apply_user (agency_id,job_id,apply_date,apply_user_email,apply_user_phone,apply_user_job_position,apply_user_cv)
       				VALUES ('$id','$clickID',now(),'$apply_email','$apply_phone','$pos1','$cv_file')";

    $result_apply = mysql_query($query_apply);

 		if($result_apply){
 			// echo $agencyName;
 			echo "<script>alert('Job apply is successful.')</script> ";
 			// echo $id;
 			
 			//php mailer
			$query = "SELECT agency_email FROM agency_info WHERE agency_id = '$id'";
			$result = mysql_query($query);
			$row=mysql_fetch_object($result);
			$notiMail = $row->agency_email;
			$mail = new PHPMailer();
			$mail->isSMTP(); 
			$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
			$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
			$mail->Port = 587; // TLS only
			$mail->SMTPSecure = 'tls'; // ssl is depracated
			$mail->SMTPAuth = true;
			$mail->Username = 'myochitmaung2018@gmail.com';
			$mail->Password = 'myochitmaung12345';
			$mail->setFrom('myochitmaung2018@gmail.com', 'Shwe Myanmar Jobs');//form email
			$mail->addAddress($notiMail, '');//To email
			$mail->Subject = 'Email Notification';
			$mail->msgHTML("<h3>Hi, Welcome to our Shwe Myanmar Jobs</h3>
							Employeer applied in your post jobs. Please check in your admin panel. <a href='http://www.shwemyanmarjob.info/admin/viewapplyjob.php'>click</a>"); 
			//$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
			//$mail->AltBody = 'HTML messaging not supported';
			// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

			if(!$mail->send()){
			    echo "Mailer Error: " . $mail->ErrorInfo;
			    // echo "Mailer Error: ";
			}else{
			    echo "Message sent!";
			}
		//php mailer end
      
    
 			

		}else{
			echo "<script>alert('File name is duplicated. Please give a different file name')</script>";
			echo "wrong".mysql_error();
		}
   
}


?>