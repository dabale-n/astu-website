<?php
session_start();
include('includes/config.php');
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astu website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .top-img{ 
            
            background-image: url(images/geda-get.jpg);
            background-size: 100%;
            background-repeat:no-repeat;
        }
        
        .top-img p{
            margin-top:12rem; 
            font-weight:bold; 
            font-size:20px;
            font-family: Georgia, "Times New Roman", Times, serif;
        }
        @media (min-width: 500px){
        .top-img{
            height:250px;
        }
       
      }
      @media (max-width: 500px){
        .top-img{
            height:100px;
        }
        
      }
      @media (max-width: 670px){
        .top-img p{
            margin-top:11rem; 
            font-size:20px;
        }
      }
      @media (max-width: 600px){
        .top-img p{
            margin-top:10rem; 
            font-size:20px;
        }
      }
      @media (max-width: 530px){
        .top-img p{
            margin-top:9rem; 
            font-size:20px;
        }
      }
      @media (max-width: 426px){
        .top-img p{
            margin-top:5rem; 
            font-size:10px;
        }
      }
    </style>

  </head>
<body>
  <div class="wrapper">
    <?php include('includes/header.php');?>
       <div class="container-fluid mb-1">
            <div class="row ">
                <div class="top-img">
                    <p class="text-light" >ASTU/EVENTS</p>
                </div>
            </div> 
        </div>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="title mt-4 ">
              <h3 class="text-center">Events</h3>
          </div>
          <hr>
             
          <div class="details mt-4 pt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4 text-center text-md-left">
                 <?php
                    $query=mysqli_query($con,"select * from event where Is_Active=1");
                    while ($row=mysqli_fetch_assoc($query)) {
                    
                    ?> 
                  <div class="card mb-3 me-2">
                      <div class="row g-0">
                          <div class="col-md-4">
                            <img style="height:200px;" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" class="img-fluid rounded-start" width="100%">
                          </div>
                          <div class="col-md-8 my-auto">
                            <div class="card-body">
                              <h5 class="card-title"><?php echo htmlentities($row['Title']);?></h5>
                              <p class="card-text"><small class="text-body-secondary"><?php echo htmlentities($row['PostingDate']);?></small></p>
                              <a class="btn btn-dark" href="eventdetail.php?evid=<?php echo htmlentities($row['id']);?>">see detail</a>
                            </div>
                          </div>
                      </div>
                  </div>
                 <?php
                    }
                 ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('includes/footer.php');?>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>