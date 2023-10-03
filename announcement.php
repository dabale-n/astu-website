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
                    <p class="text-light" >ASTU/ ANNOUNCEMENT</p>
                </div>
            </div> 
        </div>
    <div class="container">
       <div class="title mt-5">
              <h3 class="text-center">ASTU Announcement</h3>
        </div>
        <hr>
      <div class="row  row-cols-1 row-cols-md-2 g-4 text-center text-md-left mt-4">

        <?php
                    $query=mysqli_query($con,"select * from announce where Is_Active=1");
                    while ($row=mysqli_fetch_assoc($query)) {
                    
                    ?>
        <div class="col">
        <i class="fa-solid fa-bell fa-beat-fade fa-lg" style="color: #ec1818;"></i>
          <a class="shadow-sm p-2 text-dark" style="text-decoration:none;" href="announcedetail.php?aid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['Title']);?></a>
        </div>
        <?php 
        }
        ?>
      </div>
    </div>

    <?php include('includes/footer.php');?>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>