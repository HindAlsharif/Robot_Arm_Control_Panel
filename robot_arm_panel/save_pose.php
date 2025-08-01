<?php
$conn = new mysqli("localhost", "root", "", "robot_db");

$servo1 = $_POST["m1"];
$servo2 = $_POST["m2"];
$servo3 = $_POST["m3"];
$servo4 = $_POST["m4"];
$servo5 = $_POST["m5"];
$servo6 = $_POST["m6"];

$sql = "INSERT INTO pose (servo1, servo2, servo3, servo4, servo5, servo6)
        VALUES ('$servo1', '$servo2', '$servo3', '$servo4', '$servo5', '$servo6')";
$conn->query($sql);
$conn->close();
?>