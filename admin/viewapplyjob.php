<?php

    include '../function.php';
    include '../db-connect.php';
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
                            Applied Jobs
                            <!-- <a class='new' href="../post-job.php">New Post</a> -->
                            
                        </h1>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 12rem;">Applied Date</th>
                                    <th style="width: 22rem;">Applicant Email</th>
                                    <th style="width: 18rem;">Applicant Phone No</th>
                                    <th style="width: 20rem;">Applied Job Position</th>
                                    <th>Attached CV</th>
                                    <!-- <th>Job Desctription</th> -->
                                    <!-- <th>Job City Location</th> -->
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                               <?php //show your post job
                               viewapplyjob();
                                ?>

                                <?php //delete posts PHP
                                    if(isset($_GET['delete'])){
                                    $del_id = $_GET['delete'];
                                    mysql_query ("set character_set_results='utf8'");

                                    //delete local file
                                    $del_query = "SELECT apply_user_cv FROM apply_user WHERE apply_user_id = {$del_id};";
                                    $del_result = mysql_query($del_query);
                                    $row = mysql_fetch_object($del_result);
                                    $cv_name = $row->apply_user_cv;
                                    unlink("../upload_cv/$cv_name");

                                    //delete db file
                                    $query = "DELETE FROM apply_user WHERE apply_user_id = {$del_id}";
                                    $result = mysql_query($query);


                                    header("Location: viewapplyjob.php");
                                   
                                    } 
                                ?><!-- delete category PHP -->
                                
                            </tbody>
                        </table>
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