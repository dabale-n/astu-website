<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

if($_GET['action']='del'&& $_GET['eid'])
{
$eventid=intval($_GET['eid']);
$query=mysqli_query($con,"update event set Is_Active=0 where id='$eventid'");
if($query)
{
$msg="event deleted ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}

if($_GET['ereid'])
{
$eventid=intval($_GET['ereid']);
$query=mysqli_query($con,"update event set Is_Active=1 where id='$eventid'");
if($query)
{
$msg="event restored ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}

if($_GET['action']='perdel'&& $_GET['edelid'])
{
$eventid=intval($_GET['edelid']);
$query=mysqli_query($con,"delete from event where id='$eventid'");
if($query)
{
$msg="event permanently deleted ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Astu website | Manage Event</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topheader.php');?>

            <!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Manage Events </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Events</a>
                                        </li>
                                        <li class="active">
                                            Manage Events  
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->




                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                         

                                    <div class="table-responsive">
<table class="table table-colored table-centered table-inverse m-0">
<thead>
<tr>

<th>Events Title</th>
<th>Posted Date</th>
<th>Updation Date</th>
<th>Posted Image</th>
<th>Posted By</th>
<th>Last Updated By</th>
<th>Action</th>

</tr>
</thead>
<tbody>

<?php
$query=mysqli_query($con,"select * from event where Is_Active=1");
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
?>
<tr>

<td colspan="4" align="center"><h3 style="color:red">No record found</h3></td>
<tr>
<?php 
} else {
while($row=mysqli_fetch_array($query))
{
?>
 <tr>
<td><?php echo htmlentities($row['Title'])?></td>
<td><?php echo htmlentities($row['PostingDate'])?></td>
<td><?php echo htmlentities($row['UpdationDate'])?></td>
<td><img src="postimages/<?php echo htmlentities($row['PostImage'])?>" alt="image" style="width:50px;"></td>
<td><?php echo htmlentities($row['postedevBy'])?></td>
<td><?php echo htmlentities($row['lastUpdatedBy'])?></td>
<td><a href="editevent.php?eid=<?php echo htmlentities($row['id']);?>" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a> 
    &nbsp;<a href="manageevents.php?eid=<?php echo htmlentities($row['id']);?>&&action=del" onclick="return confirm('Do you want to delete ?')" data-toggle="tooltip" title="Trash"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
 </tr>
<?php } }?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



<div class="row">
   <div class="col-md-12">
     <div class="demo-box m-t-20">
         <div class="m-b-30">

           <h4><i class="fa fa-trash-o" ></i> Deleted Events</h4>

          </div>

           <div class="table-responsive">
               <table class="table m-0 table-colored-bordered table-bordered-danger">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Title</th>
                                                                <th>Posting Date</th>
                                                                <th>Last updation Date</th>
                                                                <th>Event Image</th>
                                                                <th>Posted By</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                <?php 
                                    $query=mysqli_query($con,"select * from event where Is_Active=0");
                                    $cnt=1;
                                    $rowcount=mysqli_num_rows($query);
                                 if($rowcount==0)
                                    {
                                    ?>
                                    <tr>

                                    <td colspan="7" align="center"><h4 style="color:red">No record found</h4></td>
                                    <tr>
                                    <?php 
                                    }
                                 else {

                                    while($row=mysqli_fetch_array($query))
                                    {
                                    ?>

                                    <tr>
                                    <th scope="row"><?php echo htmlentities($cnt);?></th>
                                    <td><?php echo htmlentities($row['Title']);?></td>
                                    <td><?php echo htmlentities($row['PostingDate']);?></td>
                                    <td><?php echo htmlentities($row['UpdationDate']);?></td>
                                    <td><img src="postimages/<?php echo htmlentities($row['PostImage'])?>" alt="image" style="width:50px;"></td>
                                    <td><?php echo htmlentities($row['postedevBy']);?></td>
                                    <td><a href="manageevents.php?ereid=<?php echo htmlentities($row['id']);?>"><i class="ion-arrow-return-right" data-toggle="tooltip" title="Restore this SubCategory"></i></a>
                                        &nbsp;<a href="manageevents.php?edelid=<?php echo htmlentities($row['id']);?>&&action=perdel" onclick="return confirm('Do you want permanently to delete ?')" data-toggle="tooltip" title="Permanently Delete!"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
                                    </tr>
                                    <?php
                                    $cnt++;
                                    } }?>
                                    </tbody>
                                                                                    
                                                                                        </table>
            </div>
                   
        </div>

	</div>

							
</div>                  


                    </div> <!-- container -->

                </div> <!-- content -->

       <?php include('includes/footer.php');?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


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

        <!-- CounterUp  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Load page level scripts-->
        <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../plugins/jvectormap/gdp-data.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>


        <!-- Dashboard Init js -->
		<script src="assets/pages/jquery.blog-dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>