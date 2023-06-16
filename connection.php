<?php
    $servername='localhost';
    $username='root';
    $password='';
    $database='collage';
    
    $conn = new mysqli($servername, $username, $password, $database);

    $name=$_GET['name'];
    $gender=$_GET['gender'];
    $age=$_GET['age'];
    $maritalstatus=$_GET['maritalstatus'];
    $mobile=$_GET['mobile'];
    $email=$_GET['email'];
    $address=$_GET['address'];


    $cmd='insert into teacher['tname','gender','age','maritalstatus','mobile','email','address']
    values($name,$gender,$age,$maritalstatus,$mobile,$email,$address)';


    $myobj = mysql_query($conn,$cmd);

    if(isset($myobj)) {
        echo 'Connected Successfully';
    }else{
        echo 'Not connected ';
    }

?>