<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{


if(isset($_POST['submit'])){
$email=mysqli_real_escape_string($con,$_POST['AdminEmail']);
$password=$_POST['AdminPassword'];
$username=$_POST['AdminUserName'];
$usertype=$_POST['select'];

$newhash_password=password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
$query=mysqli_query($con,"insert into admintbl(AdminUserName,AdminPassword,AdminEmail,userType) values('$username','$newhash_password','$email','$usertype')");
if($query){
    $msg="register succesfully!";
} else {
    $error="failed to register";
}
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=".">
        <meta name="author" content="">
        <title>Astu website | Add Subadmin</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "checkavailability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
    </head>


    <body class="fixed-left">
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
                                    <h4 class="page-title">Add Subadmin</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Subadmin </a>
                                        </li>
                                        <li class="active">
                                            Add Subadmin
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
                                    <h4 class="m-t-0 header-title"><b>Add Subadmin </b></h4>
                                    <hr />
                        		
                                    <div class="row">
                                        <div class="col-sm-6">  

                                        <?php if($msg){ ?>
                                        <div class="alert alert-success" role="alert">
                                        <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                                        </div>
                                        <?php } ?>


                                        <?php if($error){ ?>
                                        <div class="alert alert-danger" role="alert">
                                        <?php echo htmlentities($error);?></div>
                                        <?php } ?>


                                         </div>
                                        </div>

                        			<div class="row">
                        				<div class="col-md-6">
<form class="form-horizontal" name="addsuadmin" method="post">
                                   
	        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="AdminEmail" placeholder="Enter email"  onBlur="checkAvailability()" required>
                <span id="user-availability-status" style="font-size:14px;"></span>
            </div>

            <div class="form-group">
                <label for="password">User name</label>
                <input type="text" class="form-control" id="username" name="AdminUserName" placeholder="Enter username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="pwd" name="AdminPassword" placeholder="Enter password" required>
            </div>

            <div>
            <select name="select" style="margin-left:-1rem; margin-bottom:1rem; padding:1rem 3rem; border-color:rgb(216, 216, 216); border-radius:.5rem;" required>
                <option value="" disabled selected>select position</option>
                <option value="subadmin">subadmin</option>
                <option value="stud_admin">student president</option>
            </select>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">&nbsp;</label>
            <div class="col-md-10">
            <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" id="submit" name="submit">Submit</button>
                                                    </div>
                                                </div>

	                                        </form>
                        				</div>


                        			</div>


                        			




           
                       


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>
        </div>

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