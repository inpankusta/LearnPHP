<?php

// Connection to the Database
$servername="localhost";
$username="root";
$password="";
$database="collage";


//Create a connection to the database
 $connection = mysqli_connect($servername,$username,$password, $database);


 // check the connection
if(!$connection){
    die("Connection failed". mysqli_connect_error($connection));
}else{
    echo "Connection stablished";
}

// Select the database
$tname =$_GET['tname'];
$mobile=$_GET['mobile'];
$email=$_GET['email'];

$cmd="INSERT INTO 'teacher'(tid,tname,mobile,email) value(NULL,'$tname','$mobile','$email')";

$myobj=mysql_query($connection, $cmd);

if(isset($myobj)){
    echo "Added";
}else {
    echo "Not ADDED";
}








// if ($connection->query($cmd)==true){
//     echo "Data inserted successfully";
// } else {
//     echo "Data not inserted successfully";
// }


?>

