 <?php
    include '../function.php';
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
            echo "Your session has expired for 24 hours";
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
                            Welcome to Our Shwe Myanmar Job Site
                            
                        </h1>
                        <div class="btnlarge">
                            <div class="row">
                                <div class="col-md-4">
                                    
                                  <button type="button" class="btn btn-danger btn-lg btn-block"><a href="../index.php">Home Page</a></button>

                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary btn-lg btn-block"><a href="../view-all-job.php">View All Jobs</a></button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-info btn-lg btn-block"><a href="viewapplyjob.php">View Applied Jobs</a></button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-info btn-lg btn-block"><a href="../post-job.php">Post A Job</a></button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-warning btn-lg btn-block"><a href="profile.php">View Your Profile</a></button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-danger btn-lg btn-block"><a href="yourjob.php">View Your Post Jobs</a></button>
                                </div>
                                                                                   
                            </div> 
                           
                        </div>
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