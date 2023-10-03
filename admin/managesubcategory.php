<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if($_GET['action']=='del' && $_GET['scid'])
{
	$id=intval($_GET['scid']);
	$query=mysqli_query($con,"update  subcategory set Is_Active='0' where SubCategoryId='$id'");
	$msg="Sub Category deleted ";
}
// Code for restore
if($_GET['resid'])
{
	$id=intval($_GET['resid']);
	$query=mysqli_query($con,"update  subcategory set Is_Active='1' where SubCategoryId='$id'");
	$msg="Sub Category restored successfully";
}

// Code for Forever deletionparmdel
if($_GET['action']=='perdel' && $_GET['scid'])
{
	$id=intval($_GET['scid']);
	$query=mysqli_query($con,"delete from subcategory where SubCategoryId='$id'");
	$delmsg="Sub Category deleted forever";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> Astu website | Manage SubCategories</title>
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
                                    <h4 class="page-title">Manage SubCategories</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">SubCategory </a>
                                        </li>
                                        <li class="active">
                                           Manage SubCategories
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


<div class="row">
<div class="col-sm-6">  
 
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<?php if($delmsg){ ?>
<div class="alert alert-danger" role="alert">
<?php echo htmlentities($delmsg);?></div>
<?php } ?>

 </div>
</div>
                                 
                                 
                                    


                                   


                                    <div class="row">
										<div class="col-md-12">
											<div class="demo-box m-t-20">
<div class="m-b-30">
<a href="addsubcategory.php">
<button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline" ></i></button>
</a>
 </div>

												<div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th> Category</th>
                                                                <th>Sub Category</th>
                                                                <th>Posting Date</th>
                                                                <th>Last updation Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
<?php 
$query=mysqli_query($con,"Select category.CategoryName as catname,subcategory.Subcategory as subcatname,subcategory.PostingDate as subcatpostingdate,subcategory.UpdationDate as subcatupdationdate,subcategory.SubCategoryId as subcatid from subcategory join category on subcategory.CategoryId=category.id where subcategory.Is_Active=1");
$cnt=1;
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
?>
<tr>

<td colspan="7" align="center"><h4 style="color:red">No record found</h4></td>
<tr>
<?php 
} else {

while($row=mysqli_fetch_array($query))
{
?>


 <tr>
<th scope="row"><?php echo htmlentities($cnt);?></th>
<td><?php echo htmlentities($row['catname']);?></td>
<td><?php echo htmlentities($row['subcatname']);?></td>
<td><?php echo htmlentities($row['subcatpostingdate']);?></td>
<td><?php echo htmlentities($row['subcatupdationdate']);?></td>
<td><a href="editsubcategory.php?scid=<?php echo htmlentities($row['subcatid']);?>" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a> 
	&nbsp;<a href="managesubcategory.php?scid=<?php echo htmlentities($row['subcatid']);?>&&action=del" onclick="return confirm('Do you want to delete ?')" data-toggle="tooltip" title="Trash!"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
</tr>
<?php
$cnt++;
 }} ?>
</tbody>
                                                  
                                                    </table>
                                                </div>




											</div>

										</div>

							
									</div>
                                    <!--- end row -->


                                    
<div class="row">
   <div class="col-md-12">
     <div class="demo-box m-t-20">
         <div class="m-b-30">

           <h4><i class="fa fa-trash-o" ></i> Deleted SubCategories</h4>

          </div>

           <div class="table-responsive">
               <table class="table m-0 table-colored-bordered table-bordered-danger">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th> Category</th>
                                                                <th>Sub Category</th>                                                                
                                                                <th>Posting Date</th>
                                                                  <th>Last updation Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                <?php 
                                    $query=mysqli_query($con,"Select category.CategoryName as catname,subcategory.Subcategory as subcatname,subcategory.PostingDate as subcatpostingdate,subcategory.UpdationDate as subcatupdationdate,subcategory.SubCategoryId as subcatid from subcategory join category on subcategory.CategoryId=category.id where subcategory.Is_Active=0");
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
                                    <td><?php echo htmlentities($row['catname']);?></td>
                                    <td><?php echo htmlentities($row['subcatname']);?></td>
                                    <td><?php echo htmlentities($row['subcatpostingdate']);?></td>
                                    <td><?php echo htmlentities($row['subcatupdationdate']);?></td>
                                    <td><a href="managesubcategory.php?resid=<?php echo htmlentities($row['subcatid']);?>"><i class="ion-arrow-return-right" data-toggle="tooltip" title="Restore this SubCategory"></i></a>
                                        &nbsp;<a href="managesubcategory.php?scid=<?php echo htmlentities($row['subcatid']);?>&&action=perdel" onclick="return confirm('Do you want to permanently delete ?')" data-toggle="tooltip" title="Permanently Delete!"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
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
<?php } ?>