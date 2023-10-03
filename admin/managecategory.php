<?php
include('includes/config.php');
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> | Manage Categories</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
<?php include('includes/topheader.php');?>

            <!-- ========== Left Sidebar Start ========== -->
<?php include('includes/leftsidebar.php');?>
           
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                                <div class="container">


                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="page-title-box">
                                                <h4 class="page-title">Manage Categories</h4>
                                                <ol class="breadcrumb p-0 m-0">
                                                    <li>
                                                        <a href="#">Admin</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Category </a>
                                                    </li>
                                                    <li class="active">
                                                    Manage Categories
                                                    </li>
                                                </ol>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                        <!-- end row -->

                                 <div class="row">
									<div class="col-md-12">
										<div class="demo-box m-t-20">
											<div class="table-responsive">
                                                <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th> Categoryid</th>
                                                            <th>CategoryName</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
<?php 
$query=mysqli_query($con,"Select * from category ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>

 <tr>
    <th scope="row"><?php echo htmlentities($cnt);?></th>
    <td><?php echo htmlentities($row['id']);?></td>
    <td><?php echo htmlentities($row['CategoryName']);?></td>
</tr>
<?php
$cnt++;
 } ?>
</tbody>
                                                  
                                                    </table>
                                                </div>




											</div>

										</div>

							
									</div>
                                    <!--- end row -->


                                    

                </div> <!-- content -->
<?php include('includes/footer.php');?>
            </div>

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
