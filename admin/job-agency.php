<?php

include "../db-connect.php";

$jobAgency_arr = [];
// export with myanmar font into sql

mysql_query ("set character_set_results='utf8'");   
$query = "SELECT * FROM job JOIN agency_info ON job.agency_id = agency_info.agency_id ORDER BY job_post_date2 DESC LIMIT 15";
$result = mysql_query($query);
if(!$result){
 
    echo "query failed".mysql_error();
    
       }

while($row = mysql_fetch_assoc($result)) {
 
	// array_push($job_arr, $row);
	$jobAgency_arr[] = $row;

}

echo json_encode($jobAgency_arr);



?>