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
    <?php include('includes/nav.php'); ?>
</header>

<main>

    <h1>REWARDS</h1>
    <div class="container">
        <img src="images/rewardsbanner.jpg" style="width: 100%">
        
        <div class="description">
            <h5>Make every meal count with our free rewards program.<br> After 15 bowls, get a bowl on us! Fill out the form below to get started.</h5>
        </div>
            <div class="rewardsform">
            <form action="rewards_post.php" method="post">
                <div class="signup">
                    <h6>First and Last Name</h6>
                    <label for="name"></label> <input type="text" name="name" size="40" style="height: 40px;"><br/>
                    <h6>E-mail</h6>
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
        </div>
    </div>
    
</main>

<?php include('includes/footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/basic.js"></script>

</body>
</html>
