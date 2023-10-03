<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <div class="container-fluid bg-primary top-bar">
        <div class="row">
            <div class="col m-1 text-start ">
                <a href="https://www.facebook.com/adamaastu" class="ms-2"><span><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></span></a>
                <a href="https://www.twitter.com" class="ms-2"><span><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></span></a>
                <a href="https://www.instagram.com" class="ms-2"><span><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></span></a>
                <a href="https://www.youtube.com" class="ms-2"><span><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></span></a>
                <a href="https://web.telegram.org" class="ms-2"><span><i class="fa-brands fa-telegram" style="color: #ffffff;"></i></span></a>
            </div>
            <div class="col text-end">
                <span><i class="fa-solid fa-phone fa-rotate-270" style="color: #ffffff;"></i></span>
                <a href="tel:+251221100001"><span class="me-2" style="color: #ffffff;  font-size:15px;"> +251 -221-100001</span></a>
                <span><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></span>
                <a href="mailto:sar@astu.edu.et"><span  class="me-2" style="color: #ffffff;  font-size:15px;">sar@astu.edu.et</span></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="index.php"><img src="images/asto-logo.png" alt="astu" style="width:50px; height:50px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 links">
                <li class="nav-item">
                    <a class="nav-link hover" aria-current="page" href="index.php">Home</a>
                </li>
                
                <li class="nav-item dropdown">
                    <?php 
                    $query=mysqli_query($con,"select * from subcategory where CategoryId=3 and Is_Active=1 ");
                    if ($query) {
                   
                    ?>
                    <a class="nav-link dropdown-toggle hover" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    about
                    </a>
                    
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                      while ($row=mysqli_fetch_assoc($query)) {
                    ?>
                    <li><a class="dropdown-item" href="posts.php?postsid=<?php echo $row['SubCategoryId'];?>"><?php echo $row['Subcategory'];?></a></li>
                    <?php }  } ?>
                    </ul>
                    
                </li>
                <li class="nav-item dropdown">
                    <?php 
                    $query1 = mysqli_query($con, "SELECT * FROM subcategory WHERE CategoryId = 4 AND Is_Active = 1");
                    ?>
                    <a class="nav-link dropdown-toggle hover" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        academics
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        while ($row = mysqli_fetch_assoc($query1)) {
                        ?>
                        <a class="dropdown-item" href="posts.php?postsid=<?php echo $row['SubCategoryId'];?>"><?php echo $row['Subcategory'];?></a>
                        <?php } ?>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <?php 
                    $query1 = mysqli_query($con, "SELECT * FROM subcategory WHERE CategoryId = 5 AND Is_Active = 1");
                    ?>
                    <a class="nav-link dropdown-toggle hover" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    research
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        while ($row = mysqli_fetch_assoc($query1)) {
                        ?>
                        <a class="dropdown-item" href="posts.php?postsid=<?php echo $row['SubCategoryId'];?>"><?php echo $row['Subcategory'];?></a>
                        <?php } ?>
                    </div>
                </li>
                
                <li class="nav-item dropdown">
                    <?php 
                    $query1 = mysqli_query($con, "SELECT * FROM subcategory WHERE CategoryId = 6 AND Is_Active = 1");
                    ?>
                    <a class="nav-link dropdown-toggle hover" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    office
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        while ($row = mysqli_fetch_assoc($query1)) {
                        ?>
                        <a class="dropdown-item" href="posts.php?postsid=<?php echo $row['SubCategoryId'];?>"><?php echo $row['Subcategory'];?></a>
                        <?php } ?>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <?php 
                    $query1 = mysqli_query($con, "SELECT * FROM subcategory WHERE CategoryId = 7 AND Is_Active = 1");
                    ?>
                    <a class="nav-link dropdown-toggle hover" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    linkages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        while ($row = mysqli_fetch_assoc($query1)) {
                        ?>
                        <a class="dropdown-item" href="posts.php?postsid=<?php echo $row['SubCategoryId'];?>"><?php echo $row['Subcategory'];?></a>
                        <?php } ?>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    
                    <a class="nav-link dropdown-toggle hover" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    news
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                        <a class="dropdown-item"  href="news.php">Latest Post (News)</a>
                        <a class="dropdown-item"  href="event.php">Upcoming Events</a>
                        <a class="dropdown-item"  href="announcement.php">Announcement</a>
                        
                    </div>
                </li>

               
               
                </ul>
            <form class="d-flex" name="search" action="search.php" method="post">
              <input class="form-control me-2" name="searchtitle" type="search" placeholder="Search" aria-label="Search" required>
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
   


</body>
</html>