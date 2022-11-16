<?php
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$db = "test";

$mysqli = new mysqli("localhost:3308","root", "","test");

if ($mysqli -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
echo "Connection Successfully";
$Name =  $_REQUEST['name'];
$Number = $_REQUEST['number'];
$email =  $_REQUEST['email'];
$query = $_REQUEST['query'];
 
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO contact  VALUES ('$Name','$Number','$email','$query')";
 
if(mysqli_query($mysqli, $sql)){
    echo "<h3>data stored in a database successfully." . " Please browse your localhost php my admin" . " to view the updated data</h3>";

    echo nl2br("\n$Name \n $Number \n $email\n $query");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysqli);
?>
