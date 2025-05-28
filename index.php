<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
</head>
<body>

<h1>Library Database Management</h1>


<!-- Formulaire pour ajouter un livre -->
<h2>Add a New Book</h2>
<form action="add_book.php" method="POST">
    <input type="text" name="title" placeholder="Book Title" required>
    <input type="text" name="author" placeholder="Author" required>
    <input type="text" name="genre" placeholder="Genre" >
    <input type="number" name="year" placeholder="Publication Year">
    <button type="submit">Add Book</button>
</form> 

<!-- Formulaire pour ajouter un auteur -->
<h2>Add a New Author</h2>
<form action="add_author.php" method="POST">
    <input type="text" name="name" placeholder="Author Name" required>
    <button type="submit">Add Author</button>
</form>

<!-- Formulaire pour ajouter un utilisateur -->
<h2>Add a New User</h2>
<form action="add_user.php" method="POST">
    <input type="text" name="name" placeholder="User Name" required>
    <input type="email" name="email" placeholder="User Email" required>
    <button type="submit">Add User</button>
</form>

<!-- Affichage de tous les livres avec options de suppression et de mise à jour -->
<h2>Books List</h2>
<?php
include "db.php";

$result = $conn->query("SELECT * FROM books");

while ($row = $result->fetch_assoc()) {
    echo "<p>" . htmlspecialchars($row['title']) . " - " . htmlspecialchars($row['genre']) . " (" . $row['published_year'] . ") ";
    echo "<a href='delete_book.php?id=" . $row['id'] . "'>Delete</a> | ";
    echo "<a href='update_book.php?id=" . $row['id'] . "'>Update</a></p>";

}
?>


</body>
</html>

