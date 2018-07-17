<?php

    include '../function.php';
    include '../db-connect.php';

    // echo $rname;
    error_reporting(1);
    session_start(); 
    if(!isset($_SESSION['emailss'])){
        echo "<div id='login_check'>";
        echo 'Please Sign In';
        echo "<br>";
        echo "<a href='../index.php'>Click to Sign In</a>";
        echo "</div>";
    }
    else {
        $now = time();
        if($now > $_SESSION['expire']){
            session_destroy();
            echo "<div id='login_check'>";
            echo "Your session has expired for 24 hours ";
            echo "<br>";
            echo "<a href='../index.php'>click here to login</a>";
            echo "</div>";
        }
        else{
?>

<?php 
error_reporting(1);
   $email = $_SESSION['emailss'];
   mysql_query ("set character_set_results='utf8'");
   $query = "SELECT * FROM agency_info WHERE agency_email='$email'";
   $result = mysql_query($query);
   $row=mysql_fetch_object($result);

   $rid=$row->agency_id;
   $rname=$row->agency_name;
   $remail=$row->agency_email;
   $rpassword=$row->agency_password;
   $rphone=$row->agency_phone;
   $rlogo=$row->agency_logo;
   $rfacebook=$row->agency_facebook_address;
   $rwebsite=$row->agency_website_address;
   $rday=$row->agency_business_day;
   $rhour=$row->agency_business_hour;
   $raddress=$row->agency_address;
   $rabout=$row->agency_about;
   // echo $rid;
?>
<?php include 'includes/admin_header.php';?>


    <div id="wrapper">

        <!-- Navigation -->
        
        <?php include 'includes/admin_navigation.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Your Profile                           
                        </h1>
                        <table class="table table-bordered table-hover">
                          
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $rname; ?></td>                                                       
                               </tr>
                               <tr>
                                    <th>Email Address</th>
                                    <td><?php echo $remail; ?></td>   
                               </tr>
                               <tr>
                                    <th>Password</th>
                                    <td><?php echo $rpassword; ?></td>   
                               </tr>
                               <tr>
                                    <th>Phone No</th>
                                    <td><?php echo $rphone; ?></td>   
                               </tr>
                               <tr>
                                    <th>Logo</th>
                                    <td><img src="../image/<?php echo $rlogo; ?>"></td>   
                               </tr>
                               <tr>
                                    <th>Facebook Address</th>
                                    <td><?php echo $rfacebook; ?></td>   
                               </tr>
                               <tr>
                                    <th>Website Address</th>
                                    <td><?php echo $rwebsite; ?></td>   
                               </tr>
                               <tr>
                                    <th>Business Day</th>
                                    <td><?php echo $rday; ?></td>   
                               </tr>
                               <tr>
                                    <th>Business Hour</th>
                                    <td><?php echo $rhour; ?></td>   
                               </tr>
                               <tr>
                                    <th>Address</th>
                                    <td><?php echo $raddress; ?></td>   
                               </tr>
                               <tr>
                                    <th>About Us</th>
                                    <td><?php echo $rabout; ?></td>   
                               </tr>
                               
                            
                        </table>
                         <a class='new' href='profile-edit.php?edit=<?php echo $rid; ?>'>Edit Profile</a>
                    </div>
                </div><!-- /.row -->
                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'includes/admin_footer.php'; ?>

<?php
    }
}
?>