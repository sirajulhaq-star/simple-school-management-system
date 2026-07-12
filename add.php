<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-container">
        <div class="card">
            <h2 class="section-title">Add Student</h2>
            <form method="POST">
                <label>ID:</label>
                <input type="number" name="id" placeholder="Enter student ID">
                <label>Name:</label>
                <input type="text" name="name" placeholder="Enter student Name">
                <label>Class:</label>
                <input type="text" name="class">
                <label>Roll No:</label>
                <input type="number" name="roll">
                <label>Phone No:</label>
                <input type="number" name="phone">
                <label>Address:</label>
                <input type="text" name="address">
                <input type="submit" name="save" value="Save">
            </form>
        </div>
    </div>
   
</body>
</html>

<?php

if(isset($_POST['save']))//using isset() function to check if the form is submitted or not
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $class=$_POST['class'];
    $roll=$_POST['roll'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $sql="INSERT INTO student(id,name,class,roll,phone,address)
          VALUES('$id','$name','$class','$roll','$phone','$address')";

    if(mysqli_query($con,$sql))
    {
        echo "Student Added Successfully";
    }
}

?>
 <?php include 'view_students.php'; ?>