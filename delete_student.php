<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-container">
        <div class="card">
            <h2 class="section-title">Delete Student</h2>
            <form method="POST">
                <label>Enter Student ID:</label>
                <input type="number" name="id">
                <input type="submit" name="delete" value="Delete">
            </form>
            <div class="actions">
                <a class="button-link button-secondary" href="dashboard.php">Back to Dashboard</a>
            </div>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['delete']))
{
    $id=$_POST['id'];

    $sql="DELETE FROM student WHERE id='$id'";

    if(mysqli_query($con,$sql))
    {
        echo "Student Deleted Successfully";
    }
}

?>