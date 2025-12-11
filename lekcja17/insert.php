<?php
if (
    isset($_GET['submit']) &&
    isset($_GET['first-name']) &&
    isset($_GET['last-name']) &&
    isset($_GET['school-class']) &&
    isset($_GET['grade-average'])
) {
    $first = $_GET['first-name'];
    $last = $_GET['last-name'];
    $class = $_GET['school-class'];
    $avg = $_GET['grade-average'];

    $connection = mysqli_connect("localhost", "root", "", "laczenie");

    $query = "INSERT INTO students (first_name, last_name, school_class, grade_average) 
              VALUES (?, ?, ?, ?)";
    mysqli_execute_query($connection, $query, [$first, $last, $class, $avg]);

    mysqli_close($connection);

    header("Location: index.php");
    exit;
}