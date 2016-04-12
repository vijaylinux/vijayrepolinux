<?php
$servername = "testdb.c1brr5volumf.us-east-1.rds.amazonaws.com";
$username = "test1234";
$password = "test1234";
$dbname = "testdb";

$id = $_POST["id"];
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$address = $_POST["address"];
$city = $_POST["city"];

#php


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Persons VALUES ('$id','$lastname','$firstname','$address','$city')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
