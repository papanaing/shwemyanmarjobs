<?php

include "db-connect.php";

$date_arr = [];
mysql_query ("set character_set_results='utf8'");
$query = "SELECT * FROM date_posted";
$result = mysql_query($query);
if(!$result){
 
    echo "query failed".mysql_error();
    
       }

while($row = mysql_fetch_assoc($result)) {
 
	// array_push($job_arr, $row);
	$date_arr[] = $row;

}

echo json_encode($date_arr);


?>