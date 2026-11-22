# Student Management System

A simple PHP and MySQL project for managing student records. You can add, view, edit, and delete students.

## Requirements

- XAMPP (Apache and MySQL)
- PHP with the `mysqli` extension
- A web browser

## Setup

1. Put this project folder in `C:\xampp\htdocs\student_crud`.
2. Start **Apache** and **MySQL** from the XAMPP Control Panel.
3. Open phpMyAdmin at `http://localhost/phpmyadmin`.
4. Create a database named `student_db`, then run this SQL:

   ```sql
   CREATE TABLE students (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       course VARCHAR(100) NOT NULL
   );
   ```

5. Copy `db.example.php` to `db.php`, then set your MySQL username, password, and database name in `db.php`. The local `db.php` file is ignored by Git so your password is not uploaded.
6. Visit [http://localhost/student_crud/](http://localhost/student_crud/) in your browser.

## Project files

- `index.php` — lists students and provides edit and delete actions.
- `add.php` — adds a student.
- `edit.php` — updates a student.
- `delete.php` — deletes a student.
- `db.php` — your local database connection settings (not included in Git).
- `db.example.php` — safe template to copy to `db.php`.
- `css/style.css` — page styles.
- `js/script.js` — form validation.
