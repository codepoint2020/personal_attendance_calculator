<?php

$current_grade = "";
$id = 0;

if (isset($_GET["g"])) {
    $current_grade = $_GET["g"];
} 

if (isset($_POST["btn_update"])) {
    $id = $_POST["id"];

    $update_query = $conn->query("UPDATE grade_levels SET no_attendance = $id; ");
    
    if ($update_query) {
        echo "Attendance has been updated";
    }
}




