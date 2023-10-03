<?php 
include('includes/config.php');
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                                <form action="passwordreset-code.php" method="POST">
                                        <b style="margin-left:1rem; text-transform: capitalize;">reset password</b>
                                        <div class="col-10 mt-2">
                                            <i class="mx-3" style="text-transform: capitalize;">email address :</i>
                                            <input type="text" name="email" class="form-control my-2 mx-3" required>
                                        </div>
                                        <div class="text-center mb-3">
                                            <button class="btn btn-primary" name="passwordreset">send verification email</button>
                                        </div>
                                        <div class="mx-2" style="">
                                        <a href="index.php">Back</a>
                                        </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
