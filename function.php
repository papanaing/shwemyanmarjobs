<?php
session_start();
function login(){

	include "db-connect.php";

	error_reporting(1);
	$err = false;

		if($_POST['SUBMIT']){
			$email = $_POST['EMAIL'];
			$password = $_POST['PASSWORD'];

			// echo $email;
			// echo $password;
            mysql_query ("set character_set_results='utf8'");
			$query_login = "SELECT * FROM agency_info WHERE agency_email='$email'";
			 $result_login = mysql_query($query_login);

			$row=mysql_fetch_object($result_login);
			 	$remail=$row->agency_email;
			 	$rpassword=$row->agency_password;

			 	if($email==$remail && $password==$rpassword){
			 		$err = true;						
			 		$err = "successfully login";
			 		echo "<p style='color:green; font-size: 20px;'>$err</p>";

			 		//=========Create Session=========
					$_SESSION['emailss'] = $email;
					$_SESSION['start'] = time();//taking now logged in time
					$_SESSION['expire'] = $_SESSION['start'] + (1440 * 60);
					//=================================
			 		header('location:admin/index.php');
		
			 	}
			 	else{
			 		$err = true;
			 		$err="Invalid Email or Password.";
			 		echo "<p style='color:red; font-size: 20px;'>$err</p>";
			 	}
			
		}	 

	}


function about(){
	// session_start();
	include "../db-connect.php";
	error_reporting(1);
	$email = $_SESSION['emailss'];
	mysql_query ("set character_set_results='utf8'");
	$query = "SELECT * FROM agency_info WHERE agency_email='$email'";
	$result = mysql_query($query);

	$row=mysql_fetch_object($result);
	 	$rname=$row->agency_name;
	 	$remail=$row->agency_email;
	 	$rphone=$row->agency_phone;
	 	$rlogo=$row->agency_logo;
	 	$rfacebook=$row->agency_facebook_address;
	 	$rwebsite=$row->agency_website_address;
	 	$rday=$row->agency_business_day;
	 	$rhour=$row->agency_business_hour;
	 	$raddress=$row->agency_business_address;
	 	$rabout=$row->agency_about;

	  
	  
}

function post(){
	// session_start();
   include "db-connect.php";
   error_reporting(1);
   $email = $_SESSION['emailss'];
   mysql_query ("set character_set_results='utf8'");
   $query = "SELECT agency_id FROM agency_info WHERE agency_email='$email'";
   $result = mysql_query($query);
   $row=mysql_fetch_object($result);
   $rid=$row->agency_id;
echo $rid; 	  
	  
}

function viewyourjob(){
   error_reporting(1);
   $email = $_SESSION['emailss'];
   mysql_query ("set character_set_results='utf8'");
   $query = "SELECT agency_id FROM agency_info WHERE agency_email='$email'";
   $result = mysql_query($query);
   $row=mysql_fetch_object($result);
   $rid=$row->agency_id;

   mysql_query ("set character_set_results='utf8'");
   $query = "SELECT * FROM job WHERE agency_id='$rid' ORDER BY job_post_date2 DESC";
   $result = mysql_query($query);
         while ($row = mysql_fetch_assoc($result)) {
            $job_id = $row['job_id'];
            $job_post_date2 = $row['job_post_date2'];
            $job_position1 = $row['job_position1'];
            $job_type = $row['job_type'];
            $job_cate1 = $row['job_cate1'];
            $job_desc1 = $row['job_desc1'];
            $job_city = $row['job_city'];
           
            echo "<tr>";
            echo "<td>{$job_post_date2}</td>";
            echo "<td>{$job_position1}</td>";
            echo "<td>{$job_type}</td>";
            echo "<td>{$job_cate1}</td>";
            echo "<td class='desc'>{$job_desc1}</td>";
            echo "<td>{$job_city}</td>";
                                                  
            echo "<td><a class='new' href='job-edit.php?edit={$job_id}'>Edit</a></td>";
            echo "<td><a class='btn-danger' href='yourjob.php?delete={$job_id}'>Delete</a></td>";
            echo "</tr>";
        }

}

function viewapplyjob(){
   error_reporting(1);

   $email = $_SESSION['emailss'];
   mysql_query ("set character_set_results='utf8'");
   $query = "SELECT agency_id FROM agency_info WHERE agency_email='$email'";
   $result = mysql_query($query);
   $row=mysql_fetch_object($result);
   $rid=$row->agency_id;

   mysql_query ("set character_set_results='utf8'");
   $query = "SELECT * FROM apply_user WHERE agency_id='$rid' ORDER BY apply_date DESC";
   $result = mysql_query($query);
         while ($row = mysql_fetch_assoc($result)) {
         	$apply_user_id = $row['apply_user_id'];
            $apply_date = $row['apply_date'];
            $apply_user_email = $row['apply_user_email'];
            $apply_user_phone = $row['apply_user_phone'];
            $apply_user_job_position = $row['apply_user_job_position'];
            $job_id = $row['job_id'];
            $apply_user_cv = $row['apply_user_cv'];
            
            
           
            echo "<tr>";
            echo "<td>{$apply_date}</td>";
            echo "<td>{$apply_user_email}</td>";
            echo "<td>{$apply_user_phone}</td>";
            echo "<td><a href='../show.php?clickId=$job_id'>{$apply_user_job_position}</a></td>";
            echo "<td><a href='../upload_cv/$apply_user_cv'>Download CV File</a></td>";
                                                  
            // echo "<td><a class='new' href='job-edit.php?edit={$job_id}'>Edit</a></td>";
            echo "<td><a class='btn-danger' href='viewapplyjob.php?delete={$apply_user_id}'>Delete</a></td>";
            echo "</tr>";
        }

}


function delete(){
	include "db-connect.php";

	mysql_query ("set character_set_results='utf8'");   
	$query = "SELECT * FROM job";
	$result = mysql_query($query);
	//print_r ($result);
	if(!$result){
	 
	    echo "query failed".mysql_error();
	    
	       }

	while($row = mysql_fetch_assoc($result)) {

		$currentDate = date('Y-m-d');
		$date1=date_create($currentDate);
		$date2=date_create($row['job_post_date2']);
		$diff=date_diff($date1,$date2);
		$totalDays = $diff->format("%a");


		if($totalDays > 30){
			$currentRowId = $row['job_id'];
			$query_delete = "DELETE FROM job WHERE job_id=$currentRowId";
		 
			$result_delete = mysql_query($query_delete);
		 
		    if(!$result_delete){
		    	echo "wrong query delete". mysql_error();
		    }
		}

	}



}

?>
