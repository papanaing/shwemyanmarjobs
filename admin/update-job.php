<?php  header('Content-type: text/html; charset=UTF-8'); ?>
<?php

include "../db-connect.php";

// ========= Take user data from js post request ========
mysql_query("SET NAMES utf8");

 // $agencyId = $_POST['agencyId'];
 $updateId = $_POST['updateId'];
 $jobCity = $_POST['jobCity'];
 $jobType = $_POST['jobType'];

 $jobName1 = $_POST['jobName1'];
 $jobCate1 = $_POST['jobCate1'];
 $jobDesc1 = $_POST['jobDesc1'];

 mysql_query ("set character_set_results='utf8'"); //for myanmar font
 

		$query_update = "UPDATE job SET job_type='$jobType',job_city='$jobCity',job_position1='$jobName1',job_cate1='$jobCate1',job_desc1='$jobDesc1' WHERE job_id='$updateId'";

        $result_update = mysql_query($query_update);

 		if($result_update){
 			// echo $agencyName;
 			echo "job update is successful";


		}
		

		else{
			echo "something is wrong".mysql_error();
		}

?>