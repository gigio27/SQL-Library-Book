<?php

include "db.php";

$title = $_POST["title"];
$genre = $_POST["genre"];
$author = $_POST["author"];
$year = $_POST["year"];

$sql = "INSERT INTO Books (title, author, genre, published_year) VALUES ('$title', '$author', '$genre', $year)";
if ($conn->query($sql) === TRUE) {
    echo "New Book added successfully";
} else { 
    echo "Error: " .$sql . "<br>" . $conn ->error;
    
}


$conn-> close();
header("Location: index.php");
exit();