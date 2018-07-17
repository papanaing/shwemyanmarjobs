<?php

include "db-connect.php";

$cat_arr = [];
mysql_query ("set character_set_results='utf8'");
$query = "SELECT * FROM job_type";
$result = mysql_query($query);
if(!$result){
 
    echo "query failed".mysql_error();
    
       }

while($row = mysql_fetch_assoc($result)) {
 
	// array_push($job_arr, $row);
	$cat_arr[] = $row;

}

echo json_encode($cat_arr);


?>