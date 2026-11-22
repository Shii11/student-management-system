
<?php

include 'db.php';

if (isset($_POST['id'])) {

    $id = $_POST['id'];

    $sql = "DELETE FROM students WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting student";
    }

} else {
    echo "Invalid request";
}

?>
