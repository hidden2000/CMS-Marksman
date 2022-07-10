
<?php
require('partials/connection.php');


// for registration
if(isset($_POST['submit'])){
    $studentname=$_POST['noticetitle'];
    $roolid=$_POST['noticedetails']; 
    $query = "INSERT INTO `tblnotice`(`queryTitle`, `queryDetails`) VALUES ('$_POST[noticetitle]','$_POST[noticedetails]')";
            if(mysqli_query($con,$query)){
                echo "
                <script>
                    alert('Query Registered Successfully');
                    window.location.href='user_dashboard.php';
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
        <title>SRMS Admin | Add Query</title>
        <link rel="stylesheet" href="csss/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="csss/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="csss/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="csss/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="csss/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
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
            <?php include('includes/topbar_user.php');?>   
       
            <div class="content-wrapper">
                <div class="content-container">


<?php include('includes/leftbar_user.php');?>                   


                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Add Query</h2>
                                </div>
                                
                            </div>
                      
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li><a href="#">Queries</a></li>
            							<li class="active">Add Query</li>
            						</ul>
                                </div>
                               
                            </div>
                      
                        </div>
               

                        <section class="section">
                            <div class="container-fluid">

                             

                              

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Add Query</h5>
                                                </div>
                                            </div>
  
                                            <div class="panel-body">

                                                <form method="post">
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Query Title</label>
                                                		<div class="">
                                                			<input type="text" name="noticetitle" class="form-control" required="required" id="noticetitle">
                                                		</div>
                                                	</div>
                                                       <div class="form-group has-success">
                                                        <label for="success" class="control-label">Query Details</label>
                                                        <div class="">
                                                  <textarea class="form-control" name="noticedetails" required rows="5"></textarea>
                                                        </div>
                                                    </div>

  <div class="form-group has-success">

                                                        <div class="">
                                                           <button type="submit" name="submit" class="btn btn-success btn-labeled">Submit<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    </div>


                                                    
                                                </form>

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
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

        <!-- ========== THEME JS ========== -->
        <script src="jss/main.js"></script>



        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>

