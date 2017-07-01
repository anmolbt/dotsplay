<!DOCTYPE html>
<html>
<head>
	<title>Leaning PHP</title>
	<style type="text/css">
		body
		{
			margin: 50px auto;
			padding: 0; 
		}

	</style>
</head>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
	echo "Server name - ".$_SERVER['SERVER_NAME']."<br/>";
	echo "Server Port - ".$_SERVER['SERVER_PORT']."<br/>";
	echo "Sript Name - Returns path of the current script : ";
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br/> Request_method : ".$_SERVER["REQUEST_METHOD"]."<br/>";
	
	echo "<u>Using #_REQUEST global variable </u><br/>";

	if ($_SERVER["REQUEST_METHOD"] == "POST") { //returns the request method used to access the page
    // collect value of input field
    $name = $_REQUEST['fname']; 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "<b>Name entered : </b>".$name."<br/>";
    }

    echo "<u>Using #_POST global variable</u> <br/>";

    echo "_POST is used to collect form data and also to pass variables <br/>";

    //Collecting the value of Input field.

    $name=$_POST['fname'];

    echo "<b>Name Entered : </b>".$name."<br/>";

    //using $_GET global variable

    echo "<u> PHP _GET can also be used to collect form data after submiting an HTML form with the method='get' </u> <br/>";

 	echo "<h1> Form Handling </h1>";

 	echo "<ul>
 	<li>The PHP superglobals \$_GET and \$_POST are used to collect form-data</li>
 	<li><h4>One should think of security when processing PHP forms</h4></li>
 	<li><h4>Proper validation of form data is important to protect you from hackers and spammers</h4></li></ul>";
} 


?>
</body>
</html>
