<?php
    include('includes/arrays.php');
?>

<!doctype html>

<html lang="en">
<head>
    <title>Ahi Poke Bowl | Review</title>
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
            
        <h3>Review your order</h3>
        <p><strong>Item:</strong> Poke bowl – Regular</p>
        <p><strong>Base:</strong> Brown rice</p>
        <p><strong>First scoop:</strong> Yellowtail</p>
        <p><strong>Second scoop:</strong> Shoyu ahi tuna</p>
        <p><strong>Toppings:</strong> Crabmeat, Ginger, Cucumber, Masago, Avocado </p>
        <p><strong>Sauce(s):</strong> House, Sriracha</p>
        <p><strong>Total:</strong> $8.95</p>
   
        <div class="menunav">
            <div class="maxthreeblocks">
                <div class="button"><a href="menu.php">CANCEL</a></div>
            </div>
            <div class="maxthreeblocks">
                <div class="button"><a href="payment.php">CHECKOUT</a></div>
            </div>
        </div>
   
    </div>
        



<h2>ADD MORE FOOD</h2>
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

     <div class="containergray">
            
        <h3>Create a Poke Bowl</h3>
        <div class="foodrow">
            <div class="menumaxthreeblocks">
                <a href="#"><span class="linkboxx"></span></a>
                <h4>Regular</h4>
                <p>2 scoops</p>
                 <img src="images/menu-pokebowl.jpg" alt="FOODNAME" class="foodimg"> 
                <p>$8.95</p>
            </div></a>
        </div>
        <h4>Base</h4>
        <div class="optionblocks">
            <div class="foodoptions col-sm-6 col-md-4 col-lg-4">
                <input type="radio" id="base" name="base"><label for="base">White rice</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-4 col-lg-4">
                <input type="radio" id="base" name="base"><label for="base">Brown rice</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-4 col-lg-4">
                <input type="radio" id="base" name="base"><label for="base">Salad</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-4 col-lg-4">
                <input type="radio" id="base" name="base"><label for="base">W. rice + salad</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-4 col-lg-4">
                <input type="radio" id="base" name="base"><label for="base">B. rice + salad</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-4 col-lg-4">
                <input type="radio" id="base" name="base"><label for="base">No base</label>
            </div>
        </div>
        <br><br>
    
        <div class="containerwhite">
            
        <h3>OTHER</h3>
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
            
    <div class="container">
        
        <div class="menunav">
            <div class="maxthreeblocks">
                <div class="button"><a href="menu.php">CANCEL</a></div>
            </div>
            <div class="maxthreeblocks">
                <div class="button"><a href="payment.php">CHECKOUT</a></div>
            </div>
        </div>
    </div>









</main>
    
<?php include('includes/footer.php'); ?>