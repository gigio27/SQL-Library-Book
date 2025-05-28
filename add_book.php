<?php

include "db.php";

$title = $_POST["title"];
$genre = $_POST["genre"];
$year = $_POST["year"];

$sql = "INSERT INTO Books (title, genre, publication_year) VALUES ('$title', '$genre', $year)";
if ($conn->query($sql) === TRUE) {
    echo "New Book added succesfuully";
} else { 
    echo "Error: " .$sql . "<br>" . $conn ->error;
    
}


$conn-> close();
header("Location: index.php");
exit();