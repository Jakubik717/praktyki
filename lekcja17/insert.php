<?php
if (isset($_GET['first-name']) && $_GET['first-name'] !== '') {

    $first = $_GET['first-name'];
    $last = $_GET['last-name'];
    $class = $_GET['school-class'];
    $avg = $_GET['grade-average'];

    $conn = mysqli_connect("localhost", "root", "", "laczenie");

    mysqli_execute_query(
        $conn,
        "INSERT INTO students (first_name, last_name, school_class, grade_average)
         VALUES ('$first', '$last', '$class', '$avg')"
    );

    mysqli_close($conn);

    header("Location: index.php");
    exit;
}
