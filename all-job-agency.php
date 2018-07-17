<?php

include "db-connect.php";

$jobAgencyAll_arr = [];
// export with myanmar font into sql

mysql_query ("set character_set_results='utf8'");   
$query = "SELECT * FROM job JOIN agency_info ON job.agency_id = agency_info.agency_id ORDER BY job.job_post_date2 DESC";

$result = mysql_query($query);

if(!$result){
 
    echo "query failed".mysql_error();
    
       }

while($row = mysql_fetch_assoc($result)) {

	// $date = $row["agency_job_post_date"];
	// array_push($job_arr, $row);
	$jobAgencyAll_arr[] = $row;

}

echo json_encode($jobAgencyAll_arr);



?>