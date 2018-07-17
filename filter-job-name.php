<?php

include "db-connect.php";

$filterJobName = [];
// export with myanmar font into sql

mysql_query ("set character_set_results='utf8'");   
$query = "SELECT * FROM agency ORDER BY agency_job_position1 ASC";
$result = mysql_query($query);
if(!$result){
 
    echo "query failed".mysql_error();
    
       }

while($row = mysql_fetch_assoc($result)) {
 
	// array_push($job_arr, $row);
	$filterJobName[] = $row;

}

echo json_encode($filterJobName);



?>