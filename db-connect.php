<?php
// error_reporting(1);
// $host="fdb21.awardspace.net";
// $user="2738633_jobcollection";
// $pass="myochitmaung12345";
// //connection
// $con=mysql_connect($host,$user,$pass) or die(mysql_error());
// //db selection
// mysql_select_db("2738633_jobcollection",$con);
?>

<?php
error_reporting(1);
$host="localhost";
$user="root";
$pass="";
//connection
$con=mysql_connect($host,$user,$pass) or die(mysql_error());
//db selection
mysql_select_db("2738633_jobcollection",$con);
?>