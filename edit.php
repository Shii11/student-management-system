
<?php
include 'db.php';

// Get student ID from URL
$id = $_GET['id'];

// Fetch existing student
$sql = "SELECT * FROM students WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$student = mysqli_fetch_assoc($result);

if (!$student) {
    die("Student not found");
}

// Update student
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE students
            SET name = ?, email = ?, course = ?
            WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt, "sssi", $name, $email, $course, $id
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating student";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">

    <h2>Edit Student</h2>

    <form method="POST">

        <label>Student Name</label>
        <input type="text" name="name"
               value="<?php echo htmlspecialchars($student['name']); ?>"
               required>

        <label>Email</label>
        <input type="email" name="email"
               value="<?php echo htmlspecialchars($student['email']); ?>"
               required>

        <label>Course</label>
        <input type="text" name="course"
               value="<?php echo htmlspecialchars($student['course']); ?>"
               required>

        <button type="submit" name="update">Update Student</button>

    </form>

    <a href="index.php">Back to Home</a>

</div>

</body>
</html>
