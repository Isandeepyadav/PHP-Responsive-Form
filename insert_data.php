<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sandeep2";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: <br>". mysqli_connect_error());
}
else{
    echo "Connection was successful <br>" ;
}
$name="Niraj";
$destination="Mahabaleshwar";

//Sql query to be executed
$sql ="INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

// Add a new trip to database
if($result){
    echo "The record has been inserted successfully!<br>";
}
else{
    echo " The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>