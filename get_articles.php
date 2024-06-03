<?php
include 'db.php';
$sql = "SELECT * FROM articles ORDER BY created_at DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>".$row["title"]."</h2>";
        echo "<p>".$row["description"]."</p>";
        echo "<p>Category: ".$row["category"]."</p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
