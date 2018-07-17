<?php

include "db-connect.php";

$logo_arr = [];
mysql_query ("set character_set_results='utf8'");
$query = "SELECT DISTINCT agency_logo FROM agency_info";
$result = mysql_query($query);
if(!$result){
 
    echo "query failed".mysql_error();
    
       }

while($row = mysql_fetch_assoc($result)) {
 
	// array_push($job_arr, $row);
	$logo_arr[] = $row;

}

echo json_encode($logo_arr);


?>