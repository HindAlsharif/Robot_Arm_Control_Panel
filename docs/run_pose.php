<?php
$conn = new mysqli("localhost", "root", "", "robot_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM pose ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

   
    $update = "UPDATE run SET 
        servo1 = {$row['servo1']}, 
        servo2 = {$row['servo2']}, 
        servo3 = {$row['servo3']}, 
        servo4 = {$row['servo4']}, 
        servo5 = {$row['servo5']}, 
        servo6 = {$row['servo6']}, 
        status = 1 
        WHERE id = 1";

    $conn->query($update);
}

$conn->close();
?>