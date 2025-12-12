<?php
if (
    isset($_GET['first-name']) &&
    isset($_GET['last-name']) &&
    isset($_GET['school-class']) &&
    isset($_GET['grade-average']) &&
    !isset($_GET['edit-id'])
) {
    $connection = mysqli_connect("localhost", "root", "", "laczenie");

    $query = "INSERT INTO students (first_name, last_name, school_class, grade_average) 
              VALUES (?, ?, ?, ?)";

    mysqli_execute_query(
        $connection,
        $query,
        [$_GET['first-name'], $_GET['last-name'], $_GET['school-class'], $_GET['grade-average']]
    );

    mysqli_close($connection);

    header("Location: index.php");
    exit;
}
