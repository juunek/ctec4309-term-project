<?php
    include('includes/arrays.php');
?>

<!doctype html>

<html lang="en">
<head>
    <title>Ahi Poke Bowl | Payment</title>
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
    
    <div class="containergray">
            
        <h3>Review your order</h3>
        <p><strong>Item:</strong> Poke bowl – Regular</p>
        <p><strong>Base:</strong> Brown rice</p>
        <p><strong>First scoop:</strong> Yellowtail</p>
        <p><strong>Second scoop:</strong> Shoyu ahi tuna</p>
        <p><strong>Toppings:</strong> Crabmeat, Ginger, Cucumber, Masago, Avocado </p>
        <p><strong>Sauce(s):</strong> House, Sriracha</p>
        <p><strong>Side:</strong> Gyoza</p>
        <p><strong>Total:</strong> $15.20</p>
  
   
   
    </div>
        
<br><br>


<h3>Order now</h3>
<div class="container">
    <div class="singleblock">
        <div class="formfield">
            <label for="fname"><h6>First Name</h6></label>
            <input type="text" id="fname" name="fName" placeholder="First Name">
        </div>
        <div class="formfield">
            <label for="lname"><h6>Last Name</h6></label>
            <input type="text" id="lname" name="lName" placeholder="Last Name">
        </div>
        <div class="formfield">
            <label for="email"><h6>Email</h6></label>
            <input type="text" id="email" name="email" placeholder="user@domain.com">
        </div>
        <div class="div class="formfield"">
            <label for="address1"><h6>Address Line 1</h6></label>
            <input type="text" id="address1" name="address" placeholder="1234 W Street">
        </div>
        <div class="formfield">
            <label for="address2"><h6>Address Line 2</h6></label>
            <input type="text" id="address2" name="address" placeholder="apt/suite number">
        </div>
        <div class="formfield">
            <label for="city"><h6>City</h6></label>
            <input type="text" id="city" name="city" placeholder="City Name">
        </div>
        <div class="formfield">
            <label for="zipcode"><h6>ZIP Code</h6></label>
            <input type="text" id="zipcode" name="zipcode" placeholder="12323">
        </div>
        <div class="formfield">
            <label for="state"><h6>State</h6></label>
            <input type="text" id="state" name="state" placeholder="TX">
        </div>

        <div class="formfield">
        <label for="payment"><h6>Payment Type</h6></label>
        </div>
        <select id="payment" name="payment">
          <option value="Card">VISA</option>
          <option value="Card">Mastercard</option>
        </select>
        </div>
        <label for="card number"><h6>Card Number</h6></label>
        <div class="formfield">
            <input type="text" id="card" name="card" placeholder="0000-0000-0000-0000">
        </div>
        <div class="formfield">
            <label for="cardholder name"><h6>Cardholder Name</h6></label>
        <div class="formfield">
            <input type="text" id="card holder name" name="cardholder name" placeholder="John Doe">
        </div>
            <label for="expiration"><h6>Expiration Date</h6></label>
            <input type="text" id="expiration" name="expiration" placeholder="09/20">
        </div>
        <div class="formfield">
            <label for="csv"><h6>CVC/CID/CVV</h6></label>
            <input type="text" id="csv" name="csv" placeholder="456">
        </div>
        <div class="formfield">
            <label for="tip"><h6>Would you like to leave a tip?</h6></label>
        <div class="formfield">
            <input type="text" id="tip" name="tip" placeholder="Enter Tip Amount">
        </div>
    </div> 
    
    <div class="menunav">
        <div class="maxthreeblocks">
            <div class="button"><a href="receipt.php">ORDER</a></div>
        </div>
    </div>
    
</div>







</main>
    
<?php include('includes/footer.php'); ?>