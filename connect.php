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
$first_name =  $_REQUEST['fname'];
$last_name = $_REQUEST['lname'];
$email =  $_REQUEST['Email'];
$mobile = $_REQUEST['Mobile'];
$Date = $_REQUEST['date'];
$Time = $_REQUEST['time'];
 
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO tt  VALUES ('$first_name','$last_name','$email','$mobile','$Date','$Time')";
 
if(mysqli_query($mysqli, $sql)){
    echo "<h3>data stored in a database successfully." . " Please browse your localhost php my admin" . " to view the updated data</h3>";

    echo nl2br("\n$first_name\n $last_name\n $email\n $mobile \n $Date \n$Time");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysqli);
?>