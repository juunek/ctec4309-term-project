<?php
    include('includes/arrays.php');
?>

<!doctype html>

<html lang="en">
<head>
    <title>Ahi Poke Bowl | Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<header>
    <?php include('includes/nav.php'); ?>
</header>
    
<main>
    
    <h1>HIGH QUALITY POKE BOWLS</h1>
    
    <div class="container">
        <div class="homeheaderblock">
            <div class="multiblock">
                <div class="button"><a href="menu.php">ORDER</a></div>
            </div>
            <div class="multiblock">
                <div class="button"><a href="delivery.php">DELIVERY</a></div>
            </div>
        </div>
    </div>

    
    <h2>FRESH C.A.T.C.H.</h2>
    
    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12 singleblock">
            <h5>Colorful, Affordable, Tasty, Customizable, Healthy</h5>
        </div>
    </div>

    <div class="container">
        <div class="homerewardsblock">
            <div class="singleblock">
                <h2 style="color:white">REWARDS</h2>
                <h4 style="color:white">For every 15 bowls, get one FREE!</h4><br>
            </div>
            <div class="singleblock">
                <div class="button"><a href="rewards.php">SIGN UP</a></div>
            </div>
        </div>
    </div>


<h2>ABOUT US</h2>

    <div class="container">
    <div class="wrap">


        <div class="multiblock col-sm-12 col-md-6 col-lg-6">
            <img class="owner-photo" src="images/owner1.jpg">
        </div>
        
        <div class="multiblock col-sm-12 col-md-6 col-lg-6">
            <img class="owner-photo" src="images/owner2.jpg">
        </div>
        
        <div class="singleblock">
            <div class="description">
                <p>
                Owners, Chef Khang V. and his business partner Ronnie L. grew up together in Hawaii and    are very familiar with how tasty and popular poke is.
                <br><br>We are proud to be the first in Texas to bring you the  popular Hawaiian poke bowl dish using the freshest and highest quality of sustainable ingredients!
                </p>
            </div>
        </div>
    </div>
    <div class="singleblock">
      <img class="store" src="images/store.jpg">
    </div>
</div>
<br>
<h2>AN ARLINGTON FAVORITE</h2>
<!-- -----------------------Carousel--------------------------- -->
<div class="slideshow-container" style="width:90%;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="images/ss1.jpg" style="width:90%; padding-left: 30px;" >
  </div>

  <div class="mySlides fade">
    <img src="images/ss2.jpg" style="width:90%; padding-left: 30px;">
  </div>

  <div class="mySlides fade">
    <img src="images/ss3.jpg" style="width:90%; padding-left: 30px;">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


</main>

<?php include('includes/footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/basic.js"></script>

</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/carousel.js"></script>

</body>
</html>