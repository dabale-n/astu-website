<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{

    $password=$_POST['password'];
    $email=$_POST['email'];
    $confirmpassword=$_POST['confirmpassword'];
    $options = ['cost' => 12];
    $adminemail=$_SESSION['login'];

    $newpassword=$_POST['newpassword'];
    $newhashedpass=password_hash($newpassword, PASSWORD_BCRYPT, $options);


    $sql=mysqli_query($con,"SELECT AdminPassword FROM  admintbl where AdminEmail='$adminemail'");
    $num=mysqli_fetch_array($sql);
    if($newpassword == $confirmpassword)
    {
        $dbpassword=$num['AdminPassword'];
        if (password_verify($password, $dbpassword))
        {
        $con=mysqli_query($con,"update admintbl set AdminPassword='$newhashedpass',AdminEmail='$email' where AdminEmail='$adminemail'");
        $msg="Profile Changed Successfully !!";
        }
        else {
            $error="Old Password not Match !!";
        }
    }
    else
    {
        $error="**password and confirm password does not match!**";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Newsportal | Add Category</title>

        <!-- App css -->
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
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>

<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>

            <div class="content-page">
                
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Change Password</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                    
                                        <li class="active">
                                         Change Password
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
                                    <h4 class="m-t-0 header-title"><b>Change Password </b></h4>
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
<div class="col-md-10">
<form class="form-horizontal" name="chngpwd" method="post">

<div class="form-group">
  <label class="col-md-4 control-label">New Email</label>
    <div class="col-md-8">
      <input type="text" class="form-control" value="" name="email" required>
    </div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Current Password</label>
<div class="col-md-8">
<input type="text" class="form-control" value="" name="password" required>
</div>
</div>
	                                     

<div class="form-group">
<label class="col-md-4 control-label">New Password</label>
<div class="col-md-8">
<input type="text" class="form-control" value="" name="newpassword" required>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Confirm Password</label>
<div class="col-md-8">
<input type="text" class="form-control" value="" name="confirmpassword" required>
</div>
</div>

 <div class="form-group">
<label class="col-md-4 control-label">&nbsp;</label>
<div class="col-md-8">
                                                  
<button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
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