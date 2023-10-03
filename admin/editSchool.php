<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['update']))
{
$stitle=$_POST['stitle'];
$sdesc=$_POST['sdesc'];
$sdetails=$_POST['sdescription'];
$lastuptdby=$_SESSION['username'];
$arr = explode(" ",$title);
$url=implode("-",$arr);
$status=1;
$sid=intval($_GET['sid']);
$query=mysqli_query($con,"update school set SDetails='$sdetails',STitle='$stitle',SDescription='$sdesc',PostUrl='$url',Is_Active='$status',lastUpdatedBy='$lastuptdby' where id='$sid'");
if($query)
{
$msg="school updated ";
header("location:manageschool.php");
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
        <title>Astu website | Edit School</title>

        <!-- Summernote css -->
        <link href="plugins/summernote/summernote.css" rel="stylesheet" />

        <!-- Select2 -->
        <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topheader.php');?>
            <!-- ========== Left Sidebar Start ========== -->
             <?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



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
                                    <h4 class="page-title">Edit school </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"> school </a>
                                        </li>
                                        <li class="active">
                                            Add school
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>



                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                                        <form name="addpost" method="post">

                                        <?php
                                           $sid=intval($_GET['sid']);
                                           $query=mysqli_query($con,"select * from school where id='$sid'");
                                            while ($row=mysqli_fetch_array($query)) {
                                                
                                            
                                        ?>
                                        <div class="form-group m-b-20">
                                        <label for="exampleInputEmail1">School Title</label>
                                        <input type="text" class="form-control" id="stitle" name="stitle" value="<?php echo htmlentities($row['STitle']); ?>"  placeholder="Enter title" required>
                                        </div>
                                        <div class="form-group m-b-20">
                                        <label for="exampleInputEmail1">School Description</label>
                                        <input type="text" class="form-control" id="sdesc" name="sdesc" value="<?php echo htmlentities($row['SDescription']); ?>"  placeholder="Enter Description" required>
                                        </div>

                                            <div class="row">
                                        <div class="col-sm-12">
                                        <div class="card-box">
                                        <h4 class="m-b-30 m-t-0 header-title"><b>School Details</b></h4>
                                        <textarea class="summernote" name="sdescription" required><?php echo htmlentities($row['SDetails']);?></textarea>
                                        </div>
                                        </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-sm-12">
                                        <div class="card-box">
                                        <h4 class="m-b-30 m-t-0 header-title"><b>Post Image</b></h4>
                                        <img src="postimages/<?php echo htmlentities($row['PostImage']);?>" width="300"/>
                                        <br />
                                        <a href="changeschimage.php?sid=<?php echo htmlentities($row['id']);?>">Update Image</a>
                                        </div>
                                        </div>
                                        </div>

                                        <?php }?>

                                        <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update </button>

                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



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
        <script src="plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
  <script src="plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="plugins/summernote/summernote.min.js"></script>



    </body>
</html>
<?php } ?>