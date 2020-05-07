<?php
    include('includes/arrays.php');
?>

<!doctype html>

<html lang="en">
<head>
    <title>Ahi Poke Bowl | Rewards</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<header>
<!--
    <?php include('includes/nav.php'); ?>
    -->

    <div class="container nav">
    <div class="nav-bar">
        <div class="logo">
            <a class="" href="index.php" title="Home"><img src="images/apb-logo.svg" height="120px"></a>
        </div>
        <div class="contact">
            <h4><a href="tel:817-200-6418">(817) 200-6418</a></h4>
            <p><a href="https://goo.gl/maps/1Jsr7fxhxkqSenWe9"><img src="images/maps-icon.svg" height="12px"> 3701 S Cooper Street, #169</a></p>
        </div>
    </div>

    <div class="nav-menu"
        <div class="multiblock">
          <a class="nav-items" href="index.html">HOME</a>
          <a class="nav-items" href="menu.html">MENU</a>
          <a class="nav-items" href="rewards.html">REWARDS</a>
          <a class="nav-items" href="news.html">NEWS</a>
        </div>
    </div>
</div>
</header>

<main>

    <h1>REWARDS</h1>
    <div class="container">
    <h5>Make every meal count with our free rewards program.<br> After 15 bowls, get a bowl on us! Fill out the form below to get started.</h5>

<form action="rewards_post.php" method="post">
    <div class="signup">
      <h6>First and Last Name:</h6>
      <label for="name"></label> <input type="text" name="name" size="40" style="height: 40px;"><br/>
      <h6>E-mail:</h6>
    	<label for="email"></label> <input type="text" name="email" size="40" style="height:40px;"><br/>
      <h6>Phone Number</h6>
      <label for="number"></label> <input type="text" name="number" size="40" style="height:40px;"><br/>
    </div>
<br>
    <input type="checkbox" id="scales" name="scales"><label for="scales" style="font-size: 12px;">I want emails on promo and specials! No third party emails :)</label>
    <br><br>
    <input type="submit" name="submitThis" value="Submit">
</form>
    </div>
</main>

<?php include('includes/footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/basic.js"></script>

</body>
</html>