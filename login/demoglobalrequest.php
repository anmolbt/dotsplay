<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
// $name=$_REQUEST['fname'];
// echo $name;

if ($_SERVER["REQUEST_METHOD"] == "POST") { //returns the request method used to access the page
    // collect value of input field
    $name = $_REQUEST['fname']; 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>