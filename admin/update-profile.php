<?php  header('Content-type: text/html; charset=UTF-8'); ?>
<?php

include "../db-connect.php";

// ========= Take user data from js post request ========
mysql_query("SET NAMES utf8");

 // $agencyId = $_POST['agencyId'];
 $updateId = $_POST['updateId'];
 $agencyName = $_POST['agencyName'];
 $agencyEmail = $_POST['agencyEmail'];
 $agencyPassword = $_POST['agencyPassword'];
 $agencyPhone = $_POST['agencyPhone'];
 $agencyLogo = $_POST['agencyLogo'];
 $agencyDays = $_POST['agencyDays'];
 $agencyFacebook = $_POST['agencyFacebook'];
 $agencyWebsite = $_POST['agencyWebsite'];
 $agencyHours = $_POST['agencyHours'];
 $agencyLocation = $_POST['agencyLocation'];
 $agencyAbout = $_POST['agencyAbout'];

// echo $updateId;
 mysql_query ("set character_set_results='utf8'"); //for myanmar font
 

		$query_update = "UPDATE agency_info SET agency_name='$agencyName',agency_email='$agencyEmail',agency_password='$agencyPassword',agency_phone='$agencyPhone',agency_logo='$agencyLogo',agency_facebook_address='$agencyFacebook',agency_website_address='$agencyWebsite',agency_business_day='$agencyDays',agency_business_hour='$agencyHours',agency_address='$agencyLocation',agency_about='$agencyAbout' WHERE agency_id='$updateId'";

        $result_update = mysql_query($query_update);

 		if($result_update){
 			// echo $agencyName;
 			echo "Profile Update is Successful";


		}
		

		else{
			echo "something is wrong".mysql_error();
		}

?>