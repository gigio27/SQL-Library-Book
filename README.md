# 📚 Library Management System

This project is a basic web-based library management application built with:

- PHP (no framework)
- MySQL (database)
- Bootstrap 5 (for modern UI)

## 🎯 Features

- Add a book (title, author, genre, publication year)
- Add an author
- Add a user
- View a list of books with delete and update options

## 🛠 Project structure

- `index.php`: main interface with forms and books table
- `add_book.php`, `add_author.php`, `add_user.php`: handle form submissions
- `db.php`: database connection
- `delete_book.php`, `update_book.php`: book actions

## 💾 Database

The database is named `LibraryDB` and includes a `books` table with the following fields:

- `id` (int, auto_increment)
- `title` (varchar)
- `author` (varchar)
- `genre` (varchar)
- `published_year` (int)

To export the database:

```bash
mysqldump -u root -p LibraryDB > LibraryDB.sql
