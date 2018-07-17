<?php

include "db-connect.php";

$job_arr = [];
// export with myanmar font into sql
mysql_query ("set character_set_results='utf8'");
$query = "SELECT * FROM job_city_location";
$result = mysql_query($query);
if(!$result){
 
    echo "query failed".mysql_error();
    
       }

while($row = mysql_fetch_assoc($result)) {
 
	// array_push($job_arr, $row);
	$job_arr[] = $row;

}

echo json_encode($job_arr);


?>