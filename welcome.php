<?php
$uname = $_POST['username'];
$pass = $_POST['password'];
echo "Your username is:";
echo $uname;
echo nl2br("\n");
echo "Your password is : Secret";
echo nl2br("\n");
$servername = "localhost";
$username = "sylesh";
$password = "5560";
$dbname = "myweb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO credentials (username,password)
VALUES ('$uname', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo nl2br("\n");
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br/>" . $conn->error;
}

$conn->close();
?>








