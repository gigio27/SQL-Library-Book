<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Library Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container py-5">
  <h1 class="mb-4 text-center">📚 Library Database Management</h1>

  <!-- Formulaire pour ajouter un livre -->
  <div class="card mb-4">
    <div class="card-header">Add a new book</div>
    <div class="card-body">
      <form action="add_book.php" method="POST" class="row g-3">
        <div class="col-md-6">
          <input type="text" name="title" class="form-control" placeholder="Book Title" required>
        </div>
        <div class="col-md-6">
          <input type="text" name="author" class="form-control" placeholder="Author" required>
        </div>
        <div class="col-md-6">
          <input type="text" name="genre" class="form-control" placeholder="Genre">
        </div>
        <div class="col-md-6">
          <input type="number" name="year" class="form-control" placeholder="Publication Year">
        </div>
        <div class="col-12 text-end">
          <button type="submit" class="btn btn-primary">Add Book</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Formulaire pour ajouter un auteur -->
  <div class="card mb-4">
    <div class="card-header">Add a new author</div>
    <div class="card-body">
      <form action="add_author.php" method="POST" class="row g-3">
        <div class="col-md-8">
          <input type="text" name="name" class="form-control" placeholder="Author Name" required>
        </div>
        <div class="col-12 text-end">
          <button type="submit" class="btn btn-secondary">Add Author</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Formulaire pour ajouter un utilisateur -->
  <div class="card mb-4">
    <div class="card-header">Add a new user</div>
    <div class="card-body">
      <form action="add_user.php" method="POST" class="row g-3">
        <div class="col-md-6">
          <input type="text" name="name" class="form-control" placeholder="User Name" required>
        </div>
        <div class="col-md-6">
          <input type="email" name="email" class="form-control" placeholder="User Email" required>
        </div>
        <div class="col-12 text-end">
          <button type="submit" class="btn btn-success">Add User</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Liste des livres -->
  <h2 class="mt-5 mb-3">Books list</h2>
  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "db.php";
      $result = $conn->query("SELECT * FROM books");
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['title']) . "</td>";
        echo "<td>" . htmlspecialchars($row['author']) . "</td>";
        echo "<td>" . htmlspecialchars($row['genre']) . "</td>";
        echo "<td>" . htmlspecialchars($row['published_year']) . "</td>";
        echo "<td>
                <a href='delete_book.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger me-1'>Delete</a>
                <a href='update_book.php?id=" . $row['id'] . "' class='btn btn-sm btn-warning'>Update</a>
              </td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
