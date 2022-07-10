<?php
session_start();
error_reporting(0);
include('partials/connection.php');
if(strlen($_SESSION['alogin'])==""){   
header("Location: index.php"); 
}else{
//For Deleting the notice

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View All Students</title>
        <link rel="stylesheet" href="csss/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="csss/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="csss/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="csss/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="csss/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="jss/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="csss/main.css" media="screen" >
        <script src="jss/modernizr/modernizr.min.js"></script>
          <style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
     <nav class="navbar top-navbar bg-white box-shadow">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="admin_dashboard.php">
                			    SCMS | User
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
 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
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
                                        <a href="#"><i class="fa fa-users"></i> <span>View Account Details</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="#"><i class="fa fa-bars"></i> <span>View Details</span></a></li>
                                           
                                        </ul>
                                    </li>
<li class="has-children">
                                        <a href="#"><i class="fa fa-info-circle"></i> <span>Certificates</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="user_certificates.php"><i class="fa fa-bars"></i> <span>View Certificate</span></a></li>
                                           
                                        </ul>        </li>


<li class="has-children">
                                        <a href="#"><i class="fa fa-bell"></i> <span>Queries</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="insert_query.php"><i class="fa fa-bars"></i> <span>Add Query</span></a></li>
                                           
                                        </ul>        </li>



                                        <li><a href="user_change_password.php"><i class="fa fa fa-server"></i> <span> User Change Password</span></a></li>
                                           
                            
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">See All Certificates</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="admin_dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Students</li>
            							<li class="active">See All Certificates</li>
            						</ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>View Certificates Info</h5>
                                                </div>
                                            </div>

                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Enrollment ID</th>
                                                            <th>Student Name</th>
                                                            <th>Certificate ID</th>
                                                            <th>Issued By</th>
                                                            <th>DOI</th>
                                                            <th>DOE</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Enrollment ID</th>
                                                            <th>Student Name</th>
                                                            <th>Certificate ID</th>
                                                            <th>Issued By</th>
                                                            <th>DOI</th>
                                                            <th>DOE</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>

                                                    
<?php
$query="select * from certificates where enrollment_id = '$username'"; // Fetch all the data from the table customers
$result=mysqli_query($con,$query);
?>

<?php 
while($array=mysqli_fetch_row($result)): ?>
    <tr>
        <td><?php echo $array[1];?></td>
        <td><?php echo $array[0];?></td>
        <td><?php echo $array[2];?></td>
        <td><?php echo $array[3];?></td>
        <td><?php echo $array[4];?></td>
        <td><?php echo $array[5];?></td>
        <td><a href="view.php?id=$row['id']">View</a></td> 
    </tr>
    <?php endwhile; ?>

                                                    
                                                    </tbody>
                                                </table>

                                         
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                                                               
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

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
        <script src="jss/bootstrap/bootstrap.min.js"></script>
        <script src="jss/pace/pace.min.js"></script>
        <script src="jss/lobipanel/lobipanel.min.js"></script>
        <script src="jss/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="jss/prism/prism.js"></script>
        <script src="jss/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="jss/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
    </body>
</html>


<?php } ?>