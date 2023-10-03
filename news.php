<?php
session_start();
include('includes/config.php');

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
      
    </style>
</head>
<body>
  <div class="wrapper">
    <?php include('includes/header.php');?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <h3 class="text-center mt-3" style="font-family: Georgia, 'Times New Roman', Times, serif;">ASTU NEWS</h3>
                <hr>
                <?php

                if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 8;
                $offset = ($pageno-1) * $no_of_records_per_page;


                $total_pages_sql = "SELECT COUNT(*) FROM news";
                $result = mysqli_query($con,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);
                
                $query=mysqli_query($con,"select * from news where Is_Active=1 order by news.id desc LIMIT $offset, $no_of_records_per_page");
                ?>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <?php
                    while ($row=mysqli_fetch_array($query)) {
                    ?>
                    <div class="col">
                        <div class="card">
                        <img src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" class="card-img-top" alt="images/mech.jpg">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlentities($row['NewsTitle']);?></h5>
                                <a href="newsdetail.php?nid=<?php echo htmlentities($row['id'])?>" class="btn btn-dark">Read More</a>
                            </div>
                            <div class="card-footer text-muted">
                            Posted on <?php echo htmlentities($row['PostingDate']);?>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    
                    <ul class="pagination justify-content-center mb-4">
                        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
                        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
                            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
                        </li>
                        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
                            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
                        </li>
                        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
                    </ul>
                </div>
            </div>   
            <?php include('includes/sidebar.php');?>
        </div>
     </div>
 </div>


   
    <?php include('includes/footer.php');?>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>