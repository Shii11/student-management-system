
<?php
include 'db.php';

//Gets all student records.
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h1>Student Management System</h1>

    <a href="add.php" class="btn">Add Student</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['course']); ?></td>

            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>"
                   class="edit">Edit</a>

                <form action="delete.php" method="POST"
                      style="display:inline;">
                    <input type="hidden" name="id"
                           value="<?php echo $row['id']; ?>">
                    <button type="submit" class="delete"
                            onclick="return confirm('Are you sure?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>
