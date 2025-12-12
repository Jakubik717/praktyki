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

    $school_class = match ($_GET['school-class']){
        "" => 0,
        "I" => 1,
        "II" => 2,
        "III" => 3,
        "IV" => 4,
        "V" => 5,
    };

    mysqli_execute_query(
        $connection,
        $query,
        [$_GET['first-name'], $_GET['last-name'], $school_class, $_GET['grade-average']]
    );

    mysqli_close($connection);

    header("Location: index.php");
    exit;
}
