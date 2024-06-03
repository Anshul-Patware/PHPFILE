<?php
include 'db.php';
$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$slug = $_POST['slug'];
$sql = "INSERT INTO articles (title, description, category, slug) VALUES ('$title', '$description', '$category', '$slug')";
if ($conn->query($sql) === TRUE) {
    include 'get_articles.php'; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
