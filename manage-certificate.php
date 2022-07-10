
<?php
require('partials/connection.php');


// for registration
if(isset($_POST['submit'])){
    $studentname=$_POST['fullanme'];
    $roolid=$_POST['rollid']; 
    $certificateid=$_POST['certificateid'];
    $user_exist_query = "SELECT `fullname`, `enrollment_id`, `certificate_id`, `issued_by`, `doi`, `doe` FROM `certificates` WHERE certificate_id = '$certificateid' ";
    $result = mysqli_query($con,$user_exist_query);
    if($result){
        if(mysqli_num_rows($result) >= 1){
            // $result_fetch = mysqli_fetch_assoc($result);
            $sql = "DELETE FROM `certificates` WHERE certificate_id = '$certificateid' ";
            if (mysqli_query($con, $sql)) {
                // echo "Record deleted successfully";
                echo"
                    <script>
                    alert('Record Deleted Successfully');
                    window.location.href='re-enter-certificate.php';
                    </script>
                    ";
            } 
            else {
                echo "Error deleting record: " . mysqli_error($con);
            }
        }
        else{
            echo "
                <script>
                    alert('Record not found.');
                    window.location.href='admin_dashboard.php';
                </script>
                ";
        }
    }
    else{
        echo"
        <script>
        alert('Cannot run query');
        window.location.href='admin_dashboard.php';
        </script>
        ";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SCMS Admin| Student Admission< </title>
        <link rel="stylesheet" href="csss/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="csss/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="csss/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="csss/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="csss/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="csss/select2/select2.min.css" >
        <link rel="stylesheet" href="csss/main.css" media="screen" >
        <script src="jss/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Certificate Admission</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="admin_dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Add Certificate Details</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Fill the Student info</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="form-horizontal" method="post">

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Full Name</label>
<div class="col-sm-10">
<input type="text" name="fullanme" class="form-control" id="fullanme" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Enrollment Id</label>
<div class="col-sm-10">
<input type="text" name="rollid" class="form-control" id="rollid" maxlength="15" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Certificate Id</label>
<div class="col-sm-10">
<input type="text" name="certificateid" class="form-control" id="rollid" maxlength="25" required="required" autocomplete="off">
</div>
</div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Re-enter Certificate Id</label>
<div class="col-sm-10">
<input type="text" name="certificateid" class="form-control" id="rollid" maxlength="25" required="required" autocomplete="off">
</div>
</div>







                                                    

                                                    
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="submit" class="btn btn-primary">Delete</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="jss/jquery/jquery-2.2.4.min.js"></script>
        <script src="jss/bootstrap/bootstrap.min.js"></script>
        <script src="jss/pace/pace.min.js"></script>
        <script src="jss/lobipanel/lobipanel.min.js"></script>
        <script src="jss/iscroll/iscroll.js"></script>
        <script src="jss/prism/prism.js"></script>
        <script src="jss/select2/select2.min.js"></script>
        <script src="jss/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>

