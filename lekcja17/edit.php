<?php
if (isset($_GET['submit-edit']) && isset($_GET['edit-id'])) {

    $id = $_GET['edit-id'];
    $first = $_GET['first-name'];
    $last = $_GET['last-name'];
    $class = $_GET['school-class'];
    $avg = $_GET['grade-average'];

    $connection = mysqli_connect("localhost", "root", "", "laczenie");

    mysqli_execute_query(
        $connection,
        "UPDATE students 
         SET first_name='$first', last_name='$last', school_class='$class', grade_average='$avg'
         WHERE id=$id"
    );

    mysqli_close($connection);

    header("Location: index.php");
    exit;
}
$edit_data = null;
if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];
    $connection = mysqli_connect("localhost", "root", "", "laczenie");
    $result = mysqli_execute_query($connection, "SELECT * FROM students WHERE id=$edit_id");
    $edit_data = mysqli_fetch_assoc($result);
    mysqli_close($connection);
}
