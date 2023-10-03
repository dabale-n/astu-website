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
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <style>


      body{
        font-family: sans-serif;
        transition: all .3s;
      }
    

      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
      }

      .wrapper{
        padding: 20px 50px;
      }
      .wrapper .title{
        font-size: 40px;
        font-weight: 600;
        margin-bottom: 10px;
      }
      .wrapper p{
        text-align: justify;
        padding-bottom: 20px;
      }
      .counter-up{
        background: url("images/gedaget.jpg") no-repeat;
        min-height: 50vh;
        background-size: cover;
        background-attachment: fixed;
        padding: 0 50px;
        position: relative;
        display: flex;
        align-items: center;
      }
      .counter-up::before{
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0,0,0,0.8);
      }
      .counter-up .content{
        z-index: 1;
        position: relative;
        display: flex;
        width: 100%;
        height: 100%;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        margin-left:-1rem
      }
      .counter-up .content .box{
        width: calc(25% - 30px);
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        padding: 20px;
      }
      .content .box .icon{
        font-size: 48px;
        color: #e6e6e6;
      }
      .content .box .counter{
        font-size: 50px;
        font-weight: 500;
        color: #f2f2f2;
        font-family: sans-serif;
      }
      .content .box .text{
        font-weight: 400;
        color: #ccc;
      }
      @media screen and (max-width: 1036px) {
        .counter-up{
          padding: 50px 50px 0 50px;
        }
        .counter-up .content .box{
          width: calc(50% - 30px);
          margin-bottom: 50px;
        }
      }
      @media screen and (max-width: 580px) {
        .counter-up .content .box{
          width: 100%;
        }
      }
      @media screen and (max-width: 500px) {
        .wrapper{
          padding: 20px;
        }
        .counter-up{
          padding: 30px 20px 0 20px;
        }
      }







      .wrapper{
        top:0;
        left:0;
        right:0;
        margin:0;
        padding:0;
      }
      .video_container{
      position: relative;
      }
      .toplayer{
        background: linear-gradient(to top right ,rgba(3, 110, 231,0.9) ,rgba(116, 212, 250, 0.1));
        width:100%;
        height:720px;
        position:absolute;
        opacity:1;
        top:0;
      }
      #video-background {
        top:0;
        left:0;
        right:0;
        width: 100%;
        height: 720px;
        object-fit: cover;
        z-index: -1;
      }
      .content {
        top:0;
        padding:3rem;
        position:absolute ;
        color: white;
        z-index: 2;
        width:700px;
        height:300px;
        margin-left:10rem;
      }
      .content .btn{
        border-radius:.5rem;
        background:black;
        color:white;
      }
      .content .btn:hover {
        background:white;
        color:black;
      }
      .content_1{
        top:35%;
        position:absolute ;
        color: white;
        z-index: 2;
        right:0;
        width:400px;
        padding-left:2rem;
      }
      .content h1{
        
        font-weight:bold;
      }
      .width{
        max-width:350px;
      }
      .animated-text {
        display: inline-block;
        position: relative;
        left: -200px;
        animation: slide-in-left 1.2s forwards;
        font-size:55px;
        font-family: Georgia, "Times New Roman", Times, serif;
      }
      .animated-text-1 {
        display: inline-block;
        position: relative;
        left: -200px;
        animation: slide-in-left 1.5s forwards;
        font-size:20px;
        font-family: Georgia, "Times New Roman", Times, serif;
        font-weight:bold;
      }
      .left-animation{
      max-width:300px; 
      position:relative; 
      left: 300px;
      font-size:20px;
      animation: slide-in-right 3s forwards;
      font-family: Georgia, "Times New Roman", Times, serif;
      }
      .media-animation{
        top:88%;
        position:absolute ;
        color: white;
        z-index: 2;
        left:0;
        width:100%;
        padding-left:2rem;

      }
      .media-animation p{
        font-size:20px;
        font-family: Georgia, "Times New Roman", Times, serif;
      }
      .media-animation a{
        font-size:20px;
      }

      .carousel-inner {
          padding:1em;
      }
      .card{
        margin:0 .5em;
        height:500px;
        border-radius:0;
        box-shadow:2px 6px 8px 0 rgba(22, 22, 26, .18);
      }
      .img_wrapper{
        max-width:100%;
        display:flex;
        height:65vw;
        justify-content:center;
        align-items:flex-start;
      }
      .img_wrapper img{
        max-width:100%;
        max-height:100%;
      }
      .carousel-control-prev, .carousel-control-next {
        width:6vh;
        height:6vh;
        background-color:#e1e1e1;
        border-radius:50%;
        top:50%;
        transform:translateY(-50%);
        opacity:.5;
      }
      .carousel-control-prev:hover, .carousel-control-next:hover {
        opacity:.8;
      }

      .reveal{
        position:relative;
        transform:translateY(150px);
        opacity:0;
        transition:all 1s ease;
      }

      .reveal.active{
        transform:translateY(0px);
        opacity:1;
      }

      .check-hover a:hover{
        border-bottom:1px solid;
        border-color:red;
        
      }
      
      



      
      @media (max-width: 1230px){
        .content {
          width:620px;
          padding:2rem;
          position:absolute ;
          height:300px;
        }
        .animated-text {
        font-size:50px;
      }
      }
      @media (max-width: 990px){
        .content {
          width:620px;
          margin-left:2rem;
          position:absolute ;
          height:300px;
        }
        .animated-text {
        font-size:40px;
      }
      .left-animation{
      max-width:300px; 
      font-size:18px;
      }

      }
      @media (max-width: 690px){
        .content {
          width:500px;
        }
        .animated-text {
        font-size:30px;
      }
      .left-animation{
      max-width:250px; 
      font-size:15px;
      padding-left:4rem;
      min-width:300px; 
      }
      .left-animation img{
        width:150px;
      }
      .content_1{
        top:48%;
      }
      }
      @media (max-width: 552px){
        .content {
          width:400px;
        }
        .animated-text {
        font-size:25px;
      }
        .content_1{
          width:300px;
          margin-right:2rem;
          top:43%;
        }
        .uni-info{
        margin-top:-2rem;
      }

      }
      @media (max-width: 440px){
        .content {
          width:350px;
        }
        .animated-text-1 {
        font-size:17px;
      }

      }
      @media (max-width: 389px){
        .content {
          width:320px;
          margin-left:1rem;
        }
        .animated-text{
          font-size:20px;
          
      }
        .animated-text-1 {
        font-size:15px;
      }
      }
      @media (max-width: 360px){
        .content {
          width:300px;
          margin-left:0.5rem;
        }
        .content_1{
          width:200px;
          margin-right:4rem;
        }
        .left-animation{
      margin-left:-6rem;
      min-width:300px; 
      }
      
      }
      @media (max-width: 319px){
        .content {
          width:auto;
          margin-left:0.5rem;
          
        }
        .content_1{
          width:200px;
          margin-right:4rem;
          top:50%;
        }
        .left-animation{
      margin-left:-6rem;
      min-width:300px; 
      }
      
      }
      @media (max-width: 770px){
        .text .img{
          margin-top:6rem;
        }
      
      }
      @media (max-width: 430px){
        .words{
          display:flex;
          flex-direction:column;

        }
        .word{
          background:red;
          
        }
      
      }

      @media screen and (min-width: 576px){
        .carousel-inner {
          display:flex;
      }
      .carousel-item {
          display:block;
          margin-right:0;
          flex: 0 0 calc(100%/3);
      }
      .img_wrapper{
          height:23vw;
      }
      }
      /** 
          .animated-text::after {
            content: attr(data-text);
            position: absolute;
            right: -100%;
            animation: slide-in-right 1s forwards;
          }

      */




      @keyframes slide-in-left {
        to {
          left: 0;
        }
      }
      @keyframes slide-in-right {
        to {
          left: 0;
        }
      }
      /** 
      @keyframes slide-in-right {
        100% {
          right: 0;
        }
      }
      */

    </style>
  </head>
<body>
  <div class="_wrapper">
    <?php include('includes/header.php');?>
    <section>
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12 p-0 home_page">
          <div class="video_container">
            <video id="video-background" autoplay loop muted>
              <source src="images/back_vido.mp4" type="video/mp4">
            </video>
              <div class="content">
                <h1 class="ms-5 mb-2 animated-text">Welcome to ASTU</h1>
                <div class="width">
                <p class="animated-text-1">Adama Science and Technonolgy University works on dedicating students to get high skill on their fields</p>
                <a href="#slider" class="btn animated-text-1 ms-5 btn">see more</a>
              </div>
              </div>
              <div class="content_1">
                 <div class="left-animation">
                  <img src="images/graduate.png" alt="" width="200px">
                  <p class="animated-text-2">ASTU is to provide ethical and competent graduates in applied science and technology.</p>
                 </div>
              </div>
              <div class="media-animation ">
              <a href="https://www.facebook.com/adamaastu" class="ms-2 animated-text-1"><span><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></span></a>
                <a href="https://www.twitter.com" class="ms-2 animated-text-1"><span><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></span></a>
                <a href="https://www.instagram.com" class="ms-2 animated-text-1"><span><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></span></a>
                <a href="https://www.youtube.com" class="ms-2 animated-text-1"><span><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></span></a>
                <a href="https://web.telegram.org" class="ms-2 animated-text-1"><span><i class="fa-brands fa-telegram" style="color: #ffffff;"></i></span></a>
              </div>
              <div class="toplayer"></div>
          </div>
          
        </div>
       </div>
      </div>
    </section>
                <div class="mt-5">
                  <h1 class="text-center" style="border-bottom:3px solid; font-family: Georgia, 'Times New Roman', Times, serif;">University Aim's</h1>
                </div> 
    <section class=" reveal uni-info">
               
         <div class="container-fluid text-center  text-dark pt-4 mt-4 pb-4">
            <div class="row text-center text-md-left">
              <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3">
                   <p><div><img src="images/open.png" width="100px" class="me-4"><strong>Why You Choose ASTU</strong></div>
                      Our university's vision is to become a globally recognized center of 
                      excellence in education, research, and innovation, inspiring students 
                      to make a positive impact on society. to provide a transformative educational 
                      experience that fosters intellectual growth, critical thinking, and ethical 
                      leadership. We value excellence, student-centeredness, integrity, collaboration, 
                      innovation, and social responsibility.  we aim to create a diverse and 
                      inclusive environment that empowers our students to become future leaders
                      and change-makers.
                    </p>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3">
                 <img src="images/grad-imga.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
    </section> 

    <section id="slider" class=" mt-5 pt-5 reveal">
         <div class="container-fluid">
               <div>
                  <h1 class="" style="border-bottom:3px solid; font-family: Georgia, 'Times New Roman', Times, serif;">Degree Programs</h1>
                </div>
	     <div class="slider">
				<div class="owl-carousel mt-5">
          <?php
          $query=mysqli_query($con,"select * from school where Is_Active=1");
          while ($row=mysqli_fetch_assoc($query)) {
          ?>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" height="200px" >
						</div>
						<a class="text-dark" style="text-decoration:none;" href="schooldetail.php?sdid=<?php echo htmlentities($row['id']); ?>"><h5 class="mb-0 text-center"><b><?php echo htmlentities($row['STitle']); ?></b></h5></a>
						<p class="text-center p-4"><?php echo htmlentities($row['SDescription']); ?></p>
					</div>
					<?php
           }
           ?>
				   </div>
			  </div>
       </div>
    </section>
    
    <section class="">
        <div class="section"></div>
      <div class="wrapper">
        
      <div class="counter-up">
        <div class="content">
          <div class="box">
            <div class="icon"><i class="fas fa-users"></i></div>
            <div class="counter">5724</div>
            <div class="text">Students</div>
          </div>
          <div class="box">
            <div class="icon"><i class="fa-solid fa-book"></i></div>
            <div class="counter">44</div>
            <div class="text">Programs</div>
          </div>
          <div class="box">
            <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
            <div class="counter">136</div>
            <div class="text">Istructors</div>
          </div>
          <div class="box">
            <div class="icon"><i class="fa-solid fa-graduation-cap"></i></div>
            <div class="counter">15302</div>
            <div class="text">Graduated Students</div>
          </div>
        </div>
      </div>
    </section>
  
    <section class=" mt-5 pt-5 reveal check-hover">
          <div class="container text-center pt-2 pb-5  ">
              <h3 class="text-center text-dark">LATEST NEWS</h3>
              <hr>
                  <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                   
                  <?php
            $query1=mysqli_query($con,"select * from news where Is_Active=1 order by news.id desc LIMIT 3");
            while ($row=mysqli_fetch_assoc($query1)) {
            ?>
                      <div class="col" >
                        <div class="card shadow rounded" style="height: 360px;">
                          <img style="height: 220px;" src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" class="card-img-top img-fluid" alt="...">
                          <div class="date">
                            <small>Posted Date: <?php echo htmlentities($row['PostingDate']); ?></small>
                          </div>
                          <div class="card-body " >
                            <a href="newsdetail.php?nid=<?php echo htmlentities($row['id']); ?>" style="text-decoration:none; font-family: Georgia, 'Times New Roman', Times, serif;" class="text-dark"><?php echo htmlentities($row['NewsTitle']); ?></a>
                            
                          </div>
                        </div>
                      </div>
                      <?php
                     } 
                     ?>
                      
                  </div>
                   <div class="row mt-4">
                    <div class="col">
                      <a href="news.php" class="text-dark" style="text-decoration:none; font-size:18px;">See More News</a>
                    </div>
                  </div>

                  <h3 class="text-center text-dark mt-5 pt-3">LATEST POSTS</h3>
                  <hr>

                  <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                       <div class="col" >
                           <div class="announce shadow p-4 mt-2 bg-white rounded">
                            <h5 class="text-center">Announcement</h5>
                            <hr>
                            <div class="align-center">
                                <ul class="list-unstyled text-center">
                                    <?php
                                    $query=mysqli_query($con,"select * from announce where Is_Active=1");
                                    while ($row=mysqli_fetch_assoc($query)) {
                                    
                                    ?>
                                    <li class="list-item shadow-sm p-2 text-dark"><div class="col">
                                    <i class="fa-solid fa-bell fa-beat-fade fa-lg" style="color: #ec1818;"></i>
                                    <a class="text-dark"  style="text-decoration:none;" href="announcedetail.php?aid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['Title']);?></a>
                                    </div></li>
                                   <?php }?>
                                </ul>
                            </div>
                            <a href="announcement.php" style="text-decoration:none; color:black;">View All</a>
                        </div>
                       </div> 
                       <div class="col" >
                           <div class="announce shadow p-4 mt-2 bg-white rounded">
                            <h5 class="text-center">Events</h5>
                            <hr>
                            <div class="align-center">
                                <ul class="list-unstyled text-center">
                                    <?php
                                    $query=mysqli_query($con,"select * from event where Is_Active=1");
                                    while ($row=mysqli_fetch_assoc($query)) {
                                    
                                    ?>
                                    <li class="list-item shadow-sm p-2 text-dark"><div class="col">
                                    <i class="fa-solid fa-bell fa-beat-fade fa-lg" style="color: #ec1818;"></i>
                                    <a class="text-dark"  style="text-decoration:none;" href="eventdetail.php?evid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['Title']);?></a>
                                    </div></li>
                                   <?php }?>
                                </ul>
                            </div>
                            <a href="event.php" style="text-decoration:none; color:black;">View All</a>
                        </div>
                       </div> 
                       <div class="col" >
                          <div class="announce shadow p-4 mt-2 bg-white rounded">
                            <h5 class="text-center">Links</h5>
                            <hr>
                            <div class="align-center">
                                <ul class="list-unstyled text-center">
                                    <li class="list-item shadow-sm p-2 text-dark"><a class="text-dark"  style="text-decoration:none;" href="https://estudent.astu.edu.et/">Estudent System</a></li>
                                    <li class="list-item shadow-sm p-2 text-dark"><a class="text-dark"  style="text-decoration:none;" href="http://pg.astu.edu.et/">Postgraduate Program</a></li>
                                    <li class="list-item shadow-sm p-2 text-dark"><a class="text-dark"  style="text-decoration:none;" href="http://dl.astu.edu.et/">ASTU Digital Library</a></li>
                                </ul>
                            </div>
                        </div>
                       </div>   
                 </div>


          </div>
    </section>

  
    <?php include('includes/footer.php');?>
  </div>
  <script>
  $(document).ready(function(){
    $('.counter').counterUp({
      delay: 10,
      time: 1200
    });
  });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/owl.carousel.min.js"></script>
	<script src="js/cscript.js"></script>
  
  <script>
    window.addEventListener('scroll', reveal);
    function reveal(){
      var reveals=document.querySelectorAll('.reveal');
      for(var i=0; i<reveals.length;i++){
        var windowheight=window.innerHeight;
        var revealtop=reveals[i].getBoundingClientRect().top;
        var revealpoint=150;

        if(revealtop<windowheight - revealpoint){
          reveals[i].classList.add('active');
        }
        else{
          reveals[i].classList.remove('active');
        }
      }
    }

    window.addEventListener('DOMContentLoaded', function() {
  var animatedText = document.querySelector('.animated-text');
  var delay = 3000; 

  animatedText.addEventListener('animationend', function() {
    setTimeout(function() {
      animatedText.removeAttribute('style');
    }, delay);
  });
});
  </script>

  </body>
</html>