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
</head>
<body>
  <div class="wrapper">
    <?php include('includes/header.php');?>
   
     <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
                <?php
                    $newsid=$_GET['nid'];
                    $currenturl="http://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];;
                    $query=mysqli_query($con,"select * from news where Is_Active=1 and id='$newsid'");
                    while ($row=mysqli_fetch_assoc($query)) {
                        
                    
                ?>
                <div class="row">
                    <h3 class="text-center mt-3" style="font-family: Georgia, 'Times New Roman', Times, serif;">ASTU NEWS</h3>
                    <hr>
                    <div class="col">
                        <div class="title mb-4">
                            <h4><?php echo htmlentities($row['NewsTitle']);?></h4>
                        </div>
                       <img src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" class="img-fluid">
                       <div class="d-flex">
                            <div class="pby me-5">
                                Posted By <strong><?php echo htmlentities($row['postedBy']);?></strong>
                            </div>
                            <div class="date">
                                <small><?php echo htmlentities($row['PostingDate']);?></small>
                            </div>
                       </div>
                       <div class="icons d-flex">
                            <div>
                                <i class="fa-solid fa-share-nodes mt-1 rounded" style="color: #4f555f;font-size:30px;"></i>
                            </div>
                            <div class="ms-3 mt-1">
                            <a href="http://www.facebook.com/share.php?u=<?php echo $currenturl;?>"><i class="pe-1 fa-brands fa-square-facebook" style="color: #0a4cbd; font-size:30px;"></i></a>
                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $currenturl;?>"><i class="pe-1 fa-brands fa-linkedin" style="color: #134cae;  font-size:30px;"></i></a>
                            <a href="https://twitter.com/share?url=<?php echo $currenturl;?>"><i class="pe-1 fa-brands fa-square-twitter" style="color: #4889f9; font-size:30px;"></i></a>
                            <a href="http://instagram.com"><i class="pe-1 fa-brands fa-instagram" style="color: #b00325; font-size:30px;"></i></a>
                            </div>
                            
                       </div>
                       <hr>
                       <div class="postdetail">
                            <p class="card-text"><?php 
                                $pt=$row['PostDetails'];
                                echo  (substr($pt,0));?>
                            </p>
                       </div>
                    </div>
                    
                </div>
                <?php } ?>
            </div>
            <?php include('includes/sidebar.php');?>      
        </div>
     </div>
    <?php include('includes/footer.php');?>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>