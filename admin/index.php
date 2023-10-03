<?php 
include('includes/config.php');
session_start();
error_reporting(0);
if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $password=$_POST['password'];

  if(authenticateUser($con,$email,$password))
    {
      $sql =mysqli_query($con,"SELECT * FROM admintbl WHERE AdminEmail='$email'");
      $num=mysqli_fetch_assoc($sql);
      $_SESSION['login']=$num['AdminEmail'];
      $_SESSION['utype']=$num['userType'];
      $_SESSION['username']=$num['AdminUserName'];
      header("location:dashboard.php");      
    }
    else{
      $_SESSION['status-failed']="email or password is wrong!";
      header("location:index.php");
      exit(0);
    }
}
function authenticateUser($con,$email,$password){
  $sql =mysqli_query($con,"SELECT AdminPassword FROM admintbl");
  $result=mysqli_fetch_assoc($sql);
  $dbpassword=$result['AdminPassword'];
  return password_verify($password,$dbpassword);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        
    </style>

</head>
  <body>
    
        <div class="container mt-5 pt-5">
            <div class="row ">
                <div class="col-12 col-sm-8 col-md-6 m-auto ">
                    <div class="card border-0 shadow">
                        <div class="card-header " style="background-color: rgb(58, 58, 58);">
                            <div class="image text-center">
                                <img src="images/asto-logo.png" style="width: 70px;"> <br>
                                <b style="text-transform: capitalize; color: white;">adama science and technology university</b>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                                  if(isset($_SESSION['status-succes']))
                                  {
                                    ?>
                                    <div class="alert alert-success py-2" style="font-size:19px;">
                                        <small><?=$_SESSION['status-succes'] ?></small>
                                    </div>
                                    <?php
                                        unset($_SESSION['status-succes']);
                                  }
                                  if(isset($_SESSION['status-failed']))
                                  {
                                    ?>
                                    <div class="alert alert-danger py-2" style="font-size:19px;">
                                        <small><?=$_SESSION['status-failed'] ?></small>
                                    </div>
                                    <?php
                                        unset($_SESSION['status-failed']);
                                  }
                             ?>
                            <form method="post">
                                <div class="col-md-9 m-auto">
                                    <div class="">
                                      <input type="email" name="email" class="form-control my-3 py-2 email-input" id="email" placeholder="email">
                                      <div id="emailError" class="invalid-feedback"></div>
                                    </div>
                                    <div class="">
                                        <input type="password"  name="password" class="form-control my-4 py-2 password-input"id="password" placeholder="password">
                                        <div id="passwordError" class="invalid-feedback"></div>
                                    </div>
                                <div class="text-center mt-3">
                                <button id="loginButton" name="login" class="btn btn-primary px-5 mb-2 mt-2" disabled>Login</button> <br>                                    <a href="passwordreset.php" style="text-decoration: none;">forgot password ?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/login_valid.js"></script>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>