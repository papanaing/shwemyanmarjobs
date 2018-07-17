<?php
// session_start();
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php"> Shwe Myanmar Job</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            <li><a href="index.php"></i><i class="fa fa-user"></i> <?php echo $_SESSION['emailss']; ?></a></li>     
             
                <li class="dropdown">
                    <a href="logout.php" class="dropdown-toggle" data-toggle=""> Logout<b class=""></b></a>
                    <!-- <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                    
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul> -->
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>


                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> View Your Profile</a>
                    </li>
                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                            <li>
                                <a href="admin_posts.php">View All Posts</a>
                            </li>
                            <li>
                                <a href="admin_posts.php?source=add_posts">Add Posts</a>
                            </li>
                        </ul>
                    </li> -->

                    <li>
                        <a class='' href="yourjob.php"><i class="fa fa-fw fa-wrench"></i> View Your Post Jobs</a>
                    </li>


                    <li>
                        <a class='' href="viewapplyjob.php"><i class="fa fa-fw fa-wrench"></i> View Applied Jobs</a>
                    </li>
                    
                    <!-- <li>
                        <a href="admin_comments.php"><i class="fa fa-fw fa-file"></i> Comments</a>
                    </li> -->
                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#"> Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#"> Dropdown Item</a>
                            </li>
                        </ul>
                    </li> -->
                    

                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>