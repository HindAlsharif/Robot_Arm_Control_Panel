<?php
$conn = new mysqli("localhost", "root", "", "robot_db");
$result = $conn->query("SELECT * FROM pose");

echo "<table border='1' style='width:100%; text-align:center; border-collapse:collapse'>";
echo "<tr><th>#</th><th>Motor 1</th><th>Motor 2</th><th>Motor 3</th><th>Motor 4</th><th>Motor 5</th><th>Motor 6</th><th>Action</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    for ($i = 1; $i <= 6; $i++) {
        echo "<td>{$row['servo'.$i]}</td>";
    }
    echo "<td>
            <button onclick='loadPose({$row['id']})'>Load</button>
            <button onclick='removePose({$row['id']})'>Remove</button>
          </td>";
    echo "</tr>";
}

echo "</table>";
$conn->close();
?>