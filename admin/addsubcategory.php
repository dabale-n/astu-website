<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['submitsubcat']))
{
$categoryid=$_POST['category'];
$subcatname=$_POST['subcategory'];
$status=1;
$query=mysqli_query($con,"insert into subcategory(CategoryId,Subcategory,Is_Active) values('$categoryid','$subcatname','$status')");
if($query)
{
$msg="Sub-Category created ";
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
        <meta name="description" content="">
        <meta name="author" content="">
        <title> | Add Subcategories</title>
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
        <script>
            function checksubcatAvailability() {
                //$("#loaderIcon").show();
                jQuery.ajax({
                    url: "checksubcatavail.php",
                    data:'subcategory='+$("#subcategory").val(),
                    type:"POST",
                    success:function(data){
                        $("#availability-status").html(data);  
                        $("#loaderIcon").hide();
                    },
                    error:function(date){}
                });
            }
        </script>
        
    
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
                                                <h4 class="page-title">Add Sub Categories</h4>
                                                <ol class="breadcrumb p-0 m-0">
                                                    <li>
                                                        <a href="#">Admin</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Category </a>
                                                    </li>
                                                    <li class="active">
                                                    Add Sub Category
                                                    </li>
                                                </ol>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                        <!-- end row -->

                                    <div class="row">
                                        <div class="col">
                                            <div class="card-box">
                                                <h4>Add Sub Category</h4>
                                                <hr>
                                                
                                                <div class="row">
                                                <div class="col-sm-6">  
                                                
                                                <?php if($msg){ ?>
                                                <div class="alert alert-success" role="alert">
                                                <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                                                </div>
                                                <?php } ?>

                                                <?php if($delmsg){ ?>
                                                <div class="alert alert-danger" role="alert">
                                                <strong>Oh snap!</strong> <?php echo htmlentities($delmsg);?></div>
                                                <?php } ?>

                                                </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-md-8">
                                                        <form class="form-horizontal" name="category" method="post">
	                                                        <div class="form-group ">
                                                             <label class="col-md-2 control-label">Category</label>                                                                 
                                                                  <div class="col-md-10">
                                                                         <select class="form-control" name="category" required>
                                                                                <option value="">Select Category </option>
                                                                                <?php
                                                                                // Feching active categories
                                                                                $ret=mysqli_query($con,"select * from category");
                                                                                while($result=mysqli_fetch_array($ret))
                                                                                {    
                                                                                ?>
                                                                                <option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['CategoryName']);?></option>
                                                                                <?php } ?>

                                                                          </select> 
	                                                              </div>
	                                                        </div>
	                                     




                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Sub-Category</label>
                                                                <div class="col-md-10">
                                                                    <input type="text" id="subcategory" class="form-control" value="" name="subcategory" onBlur="checksubcatAvailability()" required>
                                                                    <span id="availability-status" style="font-size:14px;"></span>
                                                                </div>
                                                            </div>
                                                            

                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">&nbsp;</label>
                                                                    <div class="col-md-10">
                                                                        <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submitsubcat" id="submit">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                            </div>
                                                            
	                                                    </form>
                                                      </div>
                                                    </div>
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
        <script src="plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php
}
?>