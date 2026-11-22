
<?php
include 'db.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course)
            VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $course);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error adding student";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">

    <h2>Add New Student</h2>

    <form method="POST" onsubmit="return validateForm()">

        <label>Student Name</label>
        <input type="text" id="name" name="name" required>

        <label>Email</label>
        <input type="email" id="email" name="email" required>

        <label>Course</label>
        <input type="text" id="course" name="course" required>

        <button type="submit" name="submit">Add Student</button>

    </form>

    <a href="index.php">Back to Home</a>

</div>

<script src="js/script.js"></script>

</body>
</html>
