<?php
if (
    isset($_GET['edit-id']) &&
    isset($_GET['first-name']) &&
    isset($_GET['last-name']) &&
    isset($_GET['school-class']) &&
    isset($_GET['grade-average'])
) {
    $connection = mysqli_connect("localhost", "root", "", "laczenie");

    $query = "UPDATE students 
              SET first_name=?, last_name=?, school_class=?, grade_average=? 
              WHERE id=?";

    mysqli_execute_query(
        $connection,
        $query,
        [$_GET['first-name'], $_GET['last-name'], $_GET['school-class'], $_GET['grade-average'], $_GET['edit-id']]
    );

    mysqli_close($connection);

    header("Location: index.php");
    exit;
}

$edit_data = null;

if (isset($_GET['edit'])) {
    $connection = mysqli_connect("localhost", "root", "", "laczenie");

    $query = "SELECT * FROM students WHERE id=?";
    $result = mysqli_execute_query($connection, $query, [$_GET['edit']]);

    $edit_data = mysqli_fetch_assoc($result);

    mysqli_close($connection);
}