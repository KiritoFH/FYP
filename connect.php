<?
$mysqli = new mysqli("localhost","root","Fenghua23!","FYPLocal");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
