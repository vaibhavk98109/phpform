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
//error_reporting (E_ALL ^ E_NOTICE);
    }
}
?>
</html>
