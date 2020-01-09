<!doctype html>
<html>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Registration no.:<br>
  <input type="text" name="regd1"><br>
  <input type="submit"><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $regd1 = $_POST['regd1'];
    if (empty($regd1)) {
        echo "Registration no. is empty";}
else {
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
$sql = "SELECT * FROM cse ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	if($row["regd"]==$_POST['regd1'])
        echo "regdno.: " . $row["regd"]. " | Name: " . $row["name"]. " | Year: " . $row["year"]. " | CGPA: " . $row["cgpa"]. "<br>";
    }
} else {
    echo "0 results";
}
    }
}
?>
</html>