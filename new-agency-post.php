<?php  header('Content-type: text/html; charset=UTF-8'); ?>
<?php

include "db-connect.php";

mysql_query("SET NAMES utf8");
 

 $agencyName = $_POST['agencyName'];
 $agencyEmail = $_POST['agencyEmail'];
 $agencyPassword = $_POST['agencyPassword'];
 $agencyPhone = $_POST['agencyPhone'];
 $agencyLogo = $_POST['agencyLogo'];
 // $agencyWebsite = $_POST['agencyWebsite'];
 $agencyDays = $_POST['agencyDays'];
 $agencyFacebook = $_POST['agencyFacebook'];
 $agencyWebsite = $_POST['agencyWebsite'];
 $agencyHours = $_POST['agencyHours'];
 $agencyLocation = $_POST['agencyLocation'];
 $agencyAbout = $_POST['agencyAbout'];


 $query = "SELECT agency_email FROM agency_info WHERE agency_email='$agencyEmail'";
 $result = mysql_query($query);
 if( mysql_num_rows( $result ) > 0 )
  {
   	echo "Email is already in use. Try again";

       }
 else{
 	mysql_query ("set character_set_results='utf8'"); //for myanmar font

		$query_insert = "INSERT INTO agency_info (agency_name,agency_email,agency_password,agency_phone,agency_logo,agency_facebook_address,agency_website_address,agency_business_day,agency_business_hour,agency_address,agency_about)

        VALUES ('$agencyName','$agencyEmail','$agencyPassword','$agencyPhone','$agencyLogo','$agencyFacebook','$agencyWebsite','$agencyDays','$agencyHours','$agencyLocation','$agencyAbout')";

        $result_insert = mysql_query($query_insert);

 		if($result_insert){
 			// echo $agencyName;
 			echo "Registration is successful. ";
 			// echo "Click ". "<a href='index.php'> Sign In</a>";


		}else{
			echo "something is wrong";
		}

 }

 
?>