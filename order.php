<?php
    include('includes/arrays.php');
?>

<!doctype html>

<html lang="en">
<head>
    <title>Ahi Poke Bowl | Order</title>
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
        <h4>First scoop</h4>
        <div class="optionblocks">
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop1" name="scoop1"><label for="scoop1">Hawaiian ahi tuna</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop1" name="scoop1"><label for="scoop1">Spicy ahi tuna</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop1" name="scoop1"><label for="scoop1">Tofu</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop1" name="scoop1"><label for="scoop1">Shoyu ahi tuna</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop1" name="scoop1"><label for="scoop1">Popcorn Shrimp</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop1" name="scoop1"><label for="scoop1">Fried salmon</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop1" name="scoop1"><label for="scoop1">Yellowtail</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop1" name="scoop1"><label for="scoop1">Tofu</label>
            </div>
        </div>
        <br><br>
        <h4>Second scoop</h4>
        <div class="optionblocks">
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop2" name="scoop2"><label for="scoop2">Hawaiian ahi tuna</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop2" name="scoop2"><label for="scoop2">Spicy ahi tuna</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop2" name="scoop2"><label for="scoop2">Tofu</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop2" name="scoop2"><label for="scoop2">Shoyu ahi tuna</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop2" name="scoop2"><label for="scoop2">Popcorn Shrimp</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop2" name="scoop2"><label for="scoop2">Fried salmon</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop2" name="scoop2"><label for="scoop2">Yellowtail</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="radio" id="scoop2" name="scoop2"><label for="scoop2">Tofu</label>
            </div>
        </div>
        <br><br>
        <h4>Toppings</h4>
        <div class="optionblocks">
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="toppings" name="toppings"><label for="toppings">Crabmeat</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="toppings" name="toppings"><label for="toppings">Ginger</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="toppings" name="toppings"><label for="toppings">Red onion</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="toppings" name="toppings"><label for="toppings">Cucumber</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="toppings" name="toppings"><label for="toppings">Masago</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="toppings" name="toppings"><label for="toppings">Avocado</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="toppings" name="toppings"><label for="toppings">Green onion</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="toppings" name="toppings"><label for="toppings">Pineapple</label>
            </div>
        </div>
        <br><br>
        <h4>Sauce(s)</h4>
        <div class="optionblocks">
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="sauce" name="sauce"><label for="sauce">House</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="sauce" name="sauce"><label for="sauce">Sesame</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="sauce" name="sauce"><label for="sauce">Spicy mayo</label>
            </div>
            <div class="foodoptions col-sm-6 col-md-3 col-lg-3">
                <input type="checkbox" id="sauce" name="sauce"><label for="sauce">Sriracha</label>
            </div>
        </div>
        
        <div class="nowrap">
            <div class="orderbutton">
                <div class="button"><a href="review.php">ADD TO ORDER</a>
            </div>
        </div>
        
        
    </div>
   
    </div>

    



</main>
    
<?php include('includes/footer.php'); ?>