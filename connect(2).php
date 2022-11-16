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
$Name =  $_REQUEST['Name'];
$Number = $_REQUEST['PhoneNumber'];
$issue =  $_REQUEST['Issue'];
$date = $_REQUEST['date'];
$sideeffects = $_REQUEST['SideEffects'];
 
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO onlinetreatment VALUES ('$Name','$Number','$issue','$date','$sideeffects')";
 
if(mysqli_query($mysqli, $sql)){
    echo "<h3>data stored in a database successfully." . " Please browse your localhost php my admin" . " to view the updated data</h3>";

    echo nl2br("\n$Name \n $Number \n $issue \n $date \n$sideeffects");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysqli);
?>
