<!doctype html>
<html>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Registration no.:<br>
  <input type="text" name="regd"><br>
  Name:<br>
  <input type="text" name="name"><br>
  Year:<br>
  <input type="text" name="year"><br>
  CGPA:<br>
  <input type="text" name="cgpa"><br>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $regd = $_POST['regd'];
    if (empty($regd)) {
        echo "Registration no. is empty";}
$name = $_POST['name'];
    if (empty($name)) {
        echo "name is empty";}
$year = $_POST['year'];
    if (empty($year)) {
        echo "Year is empty";}
$cgpa = $_POST['cgpa'];
    if (empty($cgpa)) {
        echo "CGPA is empty";
    } else {
        echo "$regd <br>" ;
	echo "$name <br>" ;
	echo "$year <br>" ;
	echo $cgpa;


$servername = "localhost";
$username = "root";
$password = "";
$dbname="student";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO cse VALUES('$regd','$name','$year','$cgpa')";
if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
}
?>
</html>
