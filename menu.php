<?php
    include('includes/arrays.php');
?>

<!doctype html>

<html lang="en">
<head>
    <title>Ahi Poke Bowl | Menu</title>
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

    <!-- log in, sign up, delivery -->
    <div class="container">
        <div class="menunav">
            <div class="maxthreeblocks">
                <div class="button"><a href="rewards.php">LOG IN</a></div>
                <p>EARN REWARDS</p>
            </div>
            <div class="maxthreeblocks">
                <div class="button"><a href="rewards.php">SIGN UP</a></div>
                <p>FOR REWARDS</p>
            </div>
            <div class="maxthreeblocks">
                <div class="button"><a href="delivery.php">DELIVERY</a></div>
                <p>GET FOOD!</p>
            </div>
        </div>
    </div>
    
<main>
    
    <div class="containergray">
        <div class="description">
            <p><a href="tel:817-200-6418">Call</a> or choose item to begin your pickup order as a GUEST, or <a href="rewards.php">LOG IN</a> to order with your Rewards account.</p><br>
        </div>
            
        <h3>Create a Poke Bowl</h3>
        <div class="foodrow">
            <div class="menumaxthreeblocks">
                <a href="order.php"><span class="linkbox"></span></a>
                <h4>Regular</h4>
                <p>2 scoops</p>
                 <img src="images/menu-pokebowl.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$8.95</p>
            </div>
            <div class="menumaxthreeblocks">
                <h4>Large</h4>
                <p>3 scoops</p>
                 <img src="images/menu-pokebowl.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$10.95</p>
            </div>
        </div>
    </div>

    <div class="containerwhite">
            
        <h3>Other Bowls</h3>
        <div class="foodrow">
            <div class="menumaxthreeblocks">
                <strong>Yakisoba Chicken</strong>
                 <img src="images/menu-yakisoba.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$8.95</p>
            </div>
            <div class="menumaxthreeblocks">
                <strong>Terriyaki Chicken</strong>
                 <img src="images/menu-terriyaki.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$8.95</p>
            </div>
        </div>
        
    </div>
    
    <div class="containergray">
            
        <h3>Sides</h3>
        <div class="foodrow">
            <div class="menumaxthreeblocks">
                <strong>Gyoza (6 pieces)</strong>
                 <img src="images/menu-gyoza.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$6.25</p>
            </div>
            <div class="menumaxthreeblocks">
                <strong>Extra Chicken</strong>
                 <img src="images/menu-terriyaki.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$3.00</p>
            </div>
            <div class="menumaxthreeblocks">
                <strong>Roasted Seaweed</strong>
                 <img src="images/menu-seaweed.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$1.50</p>
            </div>
        </div>
        
    </div>
    
        <div class="containerwhite">
            
        <h3>Drinks</h3>
        <div class="foodrow">
            <div class="menumaxthreeblocks">
                <strong>Passion Orange</strong>
                 <img src="images/menu-hspassionorange.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$2.00</p>
            </div>
            <div class="menumaxthreeblocks">
                <strong>Green Tea Lychee</strong>
                 <img src="images/menu-hsgreentealychee.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$2.00</p>
            </div>
            <div class="menumaxthreeblocks">
                <strong>Strawberry Lilikoi</strong>
                 <img src="images/menu-hsstrawberrylilikoi.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$2.00</p>
            </div>
        </div>
        <div class="foodrow">
            <div class="menumaxthreeblocks">
                <strong>Guava Nectar</strong>
                 <img src="images/menu-hsguavanectar.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$2.00</p>
            </div>
            <div class="menumaxthreeblocks">
                <strong>Mango Orange</strong>
                 <img src="images/menu-hsmangoorange.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$2.00</p>
            </div>
            <div class="menumaxthreeblocks">
                <strong>Bottled Water</strong>
                 <img src="images/menu-waterbottle.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$1.50</p>
            </div>
        </div>
    </div>
    
        <div class="containergray">
            
        <h3>Dessert</h3>
        <div class="foodrow">
            <div class="menumaxthreeblocks">
                <strong>Fruit Bar Popsicle</strong>
                 <img src="images/menu-fruitbar.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$1.50</p>
            </div>
            <div class="menumaxthreeblocks">
                <strong>Red Bean Mochi</strong>
                 <img src="images/menu-redbeanmochi.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$2.50</p>
            </div>
            <div class="menumaxthreeblocks">
                <strong>Roll Cake Pastry</strong>
                 <img src="images/menu-rollcake.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$2.50</p>
            </div>
        </div>
        
    </div>









</main>
    
<?php include('includes/footer.php'); ?>