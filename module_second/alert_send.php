



<?php
	// Authorisation details.
if (isset($_POST['SubmitButton'])) {
	$mobileNumber=$_POST["userMobile"];
	$username = "curmanhamer@gmail.com";
	$hash = "931aa7721cacb134765a6da970e34c6090024c75ea3ef06f170d17587680682f";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $mobileNumber; // A single number or a comma-seperated list of numbers
	$message = "Suspicious Activity Founded Take Action Review Thanks & Regards Team Drifters ";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	if ($result == true) {
		
	}
	curl_close($ch);
}
	
?>