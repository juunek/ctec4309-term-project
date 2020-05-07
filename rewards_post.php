<?php
    include('includes/arrays.php');
    include('includes/nav.php');
    // set up variables to store all suer input
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$nameLength = strlen($name);


if (array_key_exists("submitThis", $_POST)) {

	//== Modify the required and expected arrays below to fit your form ========
	$required = array('name', 'number','email');
	$expected = array('name','number', 'email');
	$missing = array();

	// use foreach loop to run through each item in the expected array
	foreach($expected as $thisField) {
		// setup a variable to store user input for this field name
		$thisUserInput = $_POST[$thisField];
		if (in_array($thisField, $required)) {
			if (empty($thisUserInput)) {
				array_push($missing, $thisField);
			} else {
				${$thisField} = $thisUserInput;
			}
		} else {
			${$thisField} = $thisUserInput;
		}
	}



	$err = array();

    //-----------------
    // validation: at least two tags are selected

    if ($nameLength < 1) {

        $err['comment'] = "Please use at least 1 characters.";
    }
    // validation: the comment should be at least 10-character long.




	// after running through all expected fields, check the $missing array. if there is no required field missing, the $missing array will be empty.


	if (empty($missing) & empty($err)){
		$tagStr = implode(", ", $tag);
		if (!empty($email)) {
			$email = "<a href='mailto:$email'>$email</a>";
		}

		$output = "<h2>Congratulations!</h2>
                <p>Thank You for joining us.</p>";

	} else {

        $output = "<h3>Oops!</h3>\n
                <p>Our system is not able to process your request.  Please see the issues below.</p>\n";

        $output .= "<ul>";

        if (!empty($missing)){
            // $missing array is not empty -- prepare a message for the user

            $missingFieldList = implode(", ",$missing);
            $output .= "<li><b>Missing fields</b>:<br>
                        The following fields are missing from your post, please go back and fill them in.  Thank you. <br>
						Missing fields: $missingFieldList \n
					</li>\n";
        }
        $to="chongkim11@gmail.com, $email";
        $subject="Ahi Poke Bowl Membership Confirmation";
        $header="From; ahipokebowl@mysite.com";
        $message="Thank you $name for joining our membership program";
        $mailSent=mail($to, $subject, $message, $header);
        $output=$output.$emailResultMessage;
        if (!empty($err)){
            foreach ($err as $key => $message) {
                $output .= "<li><b>$key</b>:<br>$message </li>\n";
            }
        }

        $output .= "</ul>\n";
	}


} else {
	$output = "Please post your message use <a href='rewards.php'>this form</a>.";
}



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
</header>

<main>
    
<?php echo $output?>

</main>

<?php include('includes/footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/basic.js"></script>

</body>
</html>
