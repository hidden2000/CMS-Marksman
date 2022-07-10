<?php 
require('partials/connection.php'); 
// if(strlen($_SESSION['alogin'])=="")
// {   header("Location: index.php"); }else{
// ?> 

<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    	<meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>Student Certificate Management System | Dashboard</title> 
        <link rel="stylesheet" href="csss/bootstrap.min.css" media="screen" >  
        <link rel="stylesheet" href="csss/font-awesome.min.css" media="screen" >  
        <link rel="stylesheet" href="csss/animate-css/animate.min.css" media="screen" >  
        <link rel="stylesheet" href="csss/lobipanel/lobipanel.min.css" media="screen" >  
        <link rel="stylesheet" href="csss/toastr/toastr.min.css" media="screen" >   
        <link rel="stylesheet" href="csss/icheck/skins/line/blue.css" >  
        <link rel="stylesheet" href="csss/icheck/skins/line/red.css" >  
        <link rel="stylesheet" href="csss/icheck/skins/line/green.css" >  
        <link rel="stylesheet" href="csss/main.css" media="screen" >  
        <script src="jss/modernizr/modernizr.min.js"></script>  
    </head>  
    <body class="top-navbar-fixed">  
        <div class="main-wrapper">  

            <!-- starts here topbar -->
            <nav class="navbar top-navbar bg-white box-shadow">  
            	<div class="container-fluid">  
                    <div class="row">  
                        <div class="navbar-header no-padding">  
                			<a class="navbar-brand" href="admin_dashboard.php">  
                			    SCMS | Admin  
                			</a>  
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                				<span class="sr-only">Toggle navigation</span>
                				<i class="fa fa-ellipsis-v"></i>
                			</button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div> 
                        <!-- /.navbar-header -->

                		<div class="collapse navbar-collapse" id="navbar-collapse-1"> 
                			<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut"> 
                                <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li> 
                                <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li> 
                       
                				<li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                               
                			</ul>
                            <!-- /.nav navbar-nav -->

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                             
                				
                				    <li><a href="logout.php" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                					
                		
                            
                			</ul>
                            <!-- /.nav navbar-nav navbar-right -->
                		</div>
                		<!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
            	</div>
            	<!-- /.container-fluid -->
            </nav>

            <!-- ends here top bar -->
              
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- leftbar starts here -->

                    <div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
                            <div class="user-info closed">
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="Shashikant Solanki" class="img-circle profile-img">
                                <h6 class="title">Shashikant Solanki</h6>
                                <small class="info">Administrator</small>
                            </div>
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li>
                                        <a href="admin_dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                                     
                                    </li>

                                    <li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li>
                                    <li class="has-children">
                                        <!-- <a href="#"><i class="fa fa-file-text"></i> <span>Student Classes</span> <i class="fa fa-angle-right arrow"></i></a> -->
                                        <!-- <ul class="child-nav">
                                            <li><a href="create-class.php"><i class="fa fa-bars"></i> <span>Create Class</span></a></li>
                                            <li><a href="manage-classes.php"><i class="fa fa fa-server"></i> <span>Manage Classes</span></a></li>
                                           
                                        </ul> -->
                                    </li>
  <li class="has-children">
                                        <!-- <a href="#"><i class="fa fa-file-text"></i> <span>Subjects</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="create-subject.php"><i class="fa fa-bars"></i> <span>Create Subject</span></a></li>
                                            <li><a href="manage-subjects.php"><i class="fa fa fa-server"></i> <span>Manage Subjects</span></a></li>
                                           <li><a href="add-subjectcombination.php"><i class="fa fa-newspaper-o"></i> <span>Add Subject Combination </span></a></li>
                                           <a href="manage-subjectcombination.php"><i class="fa fa-newspaper-o"></i> <span>Manage Subject Combination </span></a></li>
                                        </ul> -->
                                    </li>
   <li class="has-children">
                                        <a href="#"><i class="fa fa-users"></i> <span>Students</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Student</span></a></li>
                                            <li><a href="manage-students.php"><i class="fa fa fa-server"></i> <span>Update Student</span></a></li>
                                            <li><a href="remove_student.php"><i class="fa fa fa-server"></i> <span>Delete Student</span></a></li>

                                           
                                        </ul>
                                    </li>
<li class="has-children">
                                        <a href="#"><i class="fa fa-info-circle"></i> <span>Certificate</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-certificate.php"><i class="fa fa-bars"></i> <span>Add Certificate</span></a></li>
                                            <li><a href="manage-certificate.php"><i class="fa fa fa-server"></i> <span>Update Certificate</span></a></li>
                                            <li><a href="remove_certificate.php"><i class="fa fa fa-server"></i> <span>Delete Certificate</span></a></li>

                                           
                                        </ul>        </li>


<li class="has-children">
                                        <a href="#"><i class="fa fa-bell"></i> <span>Queries</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="answer_query.php"><i class="fa fa-bars"></i> <span>Answer Query</span></a></li>
                                            <!-- <li><a href="answer_query.php"><i class="fa fa fa-server"></i> <span>Delete Query</span></a></li> -->
                                           
                                        </ul>        </li>



                                        <li><a href="admin_change_password.php"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a></li>
                                           
                            
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- left bar ends here -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Dashboard</h2>
                                  
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
                      
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="students.php">

<?php 
$sql ="SELECT * from student ";  
if ($result = mysqli_query($con, $sql)) {
$totalstudents=  mysqli_num_rows( $result );
}
?>

                                            <!-- <span class="number counter"></span> -->
                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <span class="name">No. Of Users</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                                        <a class="dashboard-stat bg-danger" href="certificates.php">

<?php 
$sql ="SELECT * from certificates";  
if ($result = mysqli_query($con, $sql)) {
$totalstudents=  mysqli_num_rows( $result );
}
?>
                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <span class="name">Total Certificates</span>
                                            <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top:1%;">
                                        <a class="dashboard-stat bg-warning" href="answer_query.php">
<?php 
$sql ="SELECT * from tblnotice";  
if ($result = mysqli_query($con, $sql)) {
$totalstudents=  mysqli_num_rows( $result );
}
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <span class="name">Total queries listed</span>
                                            <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="margin-top:1%">
                                        <a class="dashboard-stat bg-success" href="manage-results.php">
                                      
<?php 
$sql ="SELECT * from query";  
if ($result = mysqli_query($con, $sql)) {
$totalstudents=  mysqli_num_rows( $result );
}
?>
                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <span class="name">No of Admin</span>
                                            <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="jss/jquery/jquery-2.2.4.min.js"></script>
        <script src="jss/jquery-ui/jquery-ui.min.js"></script>
        <script src="jss/bootstrap/bootstrap.min.js"></script>
        <script src="jss/pace/pace.min.js"></script>
        <script src="jss/lobipanel/lobipanel.min.js"></script>
        <script src="jss/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="jss/prism/prism.js"></script>
        <script src="jss/waypoint/waypoints.min.js"></script>
        <script src="jss/counterUp/jquery.counterup.min.js"></script>
        <script src="jss/amcharts/amcharts.js"></script>
        <script src="jss/amcharts/serial.js"></script>
        <script src="jss/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="jss/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="jss/amcharts/themes/light.js"></script>
        <script src="jss/toastr/toastr.min.js"></script>
        <script src="jss/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="jss/main.js"></script>
        <script src="jss/production-chart.js"></script>
        <script src="jss/traffic-chart.js"></script>
        <script src="jss/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to student Certificate Management System!");

            });
        </script>
    </body>
</html>

