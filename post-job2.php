<?php  header('Content-type: text/html; charset=UTF-8'); ?>
<?php

include "db-connect.php";

// ========= Take user data from js post request ========
mysql_query("SET NAMES utf8");

 $postDateOri = $_POST['postDateOri'];
 // $postDateOri = date("Y-m-d"); //change date d-m-Y
 $postDate = $_POST['postDate'];
 // $postDate = date("Y-m-d"); //change date d-m-Y
 

 $agencyId = $_POST['agencyId'];
 $jobCity = $_POST['jobCity'];
 $jobType = $_POST['jobType'];

 $jobName1 = $_POST['jobName1'];
 $jobCate1 = $_POST['jobCate1'];
 $jobDesc1 = $_POST['jobDesc1'];
 $jobOri1 = $_POST['jobOri1'];

 

 

 mysql_query ("set character_set_results='utf8'"); //for myanmar font
 

		$query_insert = "INSERT INTO job (agency_id,job_type,job_post_date,job_post_date2,job_position1,job_cate1,job_desc1,job_ori1,job_city)

        VALUES ('$agencyId','$jobType','$postDate','$postDateOri','$jobName1','$jobCate1','$jobDesc1','$jobOri1','$jobCity')";

        $result_insert = mysql_query($query_insert);

 		if($result_insert){
 			// echo $agencyName;
 			echo "job post is successful";


		}
		

		else{
			echo "something is wrong".mysql_error();
		}

?>