<! DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="surveyform.css">
    <title>MAGAZINE VERSION 2</title>
    
</head>

<body>

<h1> Thank you for subscribing to our monthly soccer magazines.</h1>
    
<h2>Order Summary:</h2>

<?php
     	
	
	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$address  = $_POST['address'];
	$state = $_POST['state'];
        $city  = $_POST['city'];
	$zip  = $_POST['zip'];
	$length  = $_POST['length'];
	$monthly = 3.99;
	
	$discount = 10;
	$okay = TRUE;
	
	//Defining the constant for sales tax
	define("SALES", (0.1*$monthly+$length));
	
	//Calculating total price
	$total = $length*$monthly + SALES;
	
	$discounted_price = $total - ($total * ($discount/100));

	// Validating the first name:
	if (empty($_POST['first'])) {
		echo "<p style = 'color: red;'class='error'>Please enter your first name.</p>";
		$okay = FALSE;
	} else {
		echo "<h4> First Name: $first </h4>";
	}
	
	// Validating the last name
	if (empty($_POST['last'])) {
		echo "<p style = 'color: red;'class='error'>Please enter your last name.</p>";
		$okay = FALSE;
	} else {
		echo "<h4> Last Name: $last</h4>";
		
	}
	
	// Validating the address
	if (empty($_POST['address'])) {
		echo "<p style = 'color: red;'class='error'>Please enter your address.</p>";
		$okay = FALSE;
	} else {
		echo "<h4> Address: $address </h4>";
	}
	
	// Validating the city
	if (empty($_POST['city'])) {
		echo "<p style= 'color:red;'class='error'>Please enter the name of your city.</p>";
		$okay = FALSE;
	} else {
		echo "<h4> City: $city</h4>";
	}
	
	// Validating the state
	if (empty($_POST['state'])) {
                echo "<p style= 'color:red;'class='error'>Please enter the name of your state.</p>";
		$okay = FALSE;
	} else {
		echo "<h4> State: $state</h4>";
	}
	
	// Validating the zipcode
	//Making sure it is an integer
	if (!(is_numeric($zip) && is_int(0+$zip))){
		echo "<p style='color:red;' class='error'>Please enter your zipcode.</p>";
		$okay = FALSE;
	} else {
		echo "<h4> Zipcode: $zip</h4>";
	}
	// Validating the Subscription length
	//Making sure it is an integer
	if (!(is_numeric($length) && is_int(0+$length))){
			echo "<p style='color:red;'>OOPS: You either entered a letter or a word for the monthly subscription or didn't enter anything at all. Please enter a number for your length of subscription.</p>";
			die();
	} else {
		echo "<h4> Subscription Length In Months:$length </h4>";
		echo "<h4> Monthly Charge:$monthly </h4>";
		echo  "<h4>Sales Tax:". SALES . "<br /></h4>";
		echo "<h4> Total Price of your Subscription:$total </h4>";
	}
	
	
	if ($length > 12) {
		echo "<h2> Because you are awesome you qualify for a 10% discount.</h2>";
		echo "<h4> Total Price of your Subscription after 10% discount:$discounted_price </h4>";
		
	} 
	
?>



</body>


</html>