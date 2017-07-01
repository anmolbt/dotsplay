<html>
<head>
	<title>Basic Form</title>
	<link rel="stylesheet" type="text/css" href="stylefvalidation.css">
	<style type="text/css">
		input[type=radio]{
			height: 20px;
			width: 20px;
		}
		
	.error {
		color: #000066;
		font-size: 20px;
		font-weight: bold;
	}
	
	</style>


</head>

<body>

	<?php
// define variables and set to empty values
	$name = $email = $gender = "";
	$nameErr = $emailErr = $genderErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["name"])) {
			$nameErr = "Please Enter your Name<br/>";
		} else {
			$name = test_input($_POST["name"]);
			// check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed<br/>"; 
    }
		}

		if (empty($_POST["email"])) {
			$emailErr = "Please Enter your Email<br/>";
		} else {
			$email = test_input($_POST["email"]);
			 // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format<br/>"; 
    }
		}

		if (empty($_POST["gender"])) {
			$genderErr = "Please select Gender<br/>";
		} else {
			$gender = test_input($_POST["gender"]);
		}
	}
		
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	if($nameErr == "" && $genderErr == "" && $emailErr ==""){
		echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $gender;
	}
	else
	{
		echo "<h1 style=\"color:white; text-align:center;\">Invalid Form</h1>";
		echo "<h1 style=\"color:white; text-align:center;\">Please Fill the form correctly</h1>";
	}
	?>
	<div id="outerDiv">
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<p><span class="error">* Required Field</span></p>
			<label>Name *</label>
			<input type="text" name="name" placeholder="Anmol Thakkar"><span class="error"><br/><?php echo $nameErr;?></span>
			<br/>
			
			
			<label>E-mail *</label>
			<input type="text" name="email" placeholder="anmolbt@gmail.com"><span class="error"><br/><?php echo $emailErr;?></span>
			<br/>
			

			<label>Gender *</label>
			<input type="radio" name="gender" value="female"><label>Female</label>
			<input type="radio" name="gender" value="male" checked="checked"><label>Male</label>
			<span class="error"><br/><?php echo $genderErr;?></span>
			<br>
			
			<button type="submit" class="button">Submit</button>
		</form>

	</div>
<?php


?>

</body>
</html>