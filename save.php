<?php
 $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];


$host = "localhost";
$dbname = "user";
$username = "root";
$pasword = "";

$conn = mysqli_connect(hostname :$host,
                      username : $username,
                      password : $pasword,
                      database : $dbname

);
if(mysqli_connect_errno()){
  die("connection error : " . mysqli_connect_error());
}
$connect = "INSERT INTO data (name,property_address,phone, email ) VALUES(?,?,?,?)";
 
$stmt = mysqli_stmt_init($conn);
 
if (!mysqli_stmt_prepare($stmt, $connect )){
  die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii",$name,$address,$phone,$email);

mysqli_stmt_execute($stmt);
header('form.php');

?>`