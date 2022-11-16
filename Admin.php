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
  
    $sql = "select * from tt";
    $result = ($mysqli->query($sql));
    //declare array to store the data of database
    $row = []; 
  
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   
?>

<!doctype html>
<html >
  <head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin</title>
    <style type="text/css">
    .navbar{
        background: -webkit-linear-gradient(to right, #5bc0de, #fff);  
          background: linear-gradient(to right, #5bc0de, #fff);
    }
    .thead{
        background: -webkit-linear-gradient(to right, #5bc0de, #fff);  
          background: linear-gradient(to right, #5bc0de, #fff);
    }
    </style>
  </head>
  <body>
 <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h3>Admin Page</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto mb-2 mb-lg-0 ">    
      </div>
    </div>
     </div>
</nav>
<h1 align = "center"> Appointments</h1>
 <div class="container-fluid">
       <div class="row justify-content-center my-5">
           <div class="col-10">
            <table class="table table-bordered">
              <thead class="thead">
                <tr>
                <th scope="col">First Name of Patient</th>
                  <th scope="col">Last Name of Patient</th>
                  <th scope = "col">Email Id </th>
                  <th scope="col">Mobile Number</th>
                  <th scope="col">Appointment date</th>
                  <th scope="col">Appointment Time</th>
                </tr>
              </thead>
              <tbody>
            <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
            <tr>
  
                <td><?php echo $rows['fname']; ?></td>
                <td><?php echo $rows['lname']; ?></td>
                <td><?php echo $rows['Email']; ?></td>
                <td><?php echo $rows['MobileNo']; ?></td>
                <td><?php echo $rows['date']; ?></td>
                <td><?php echo $rows['time']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
     </div>
   </div>
  </div>
</body>
</html>