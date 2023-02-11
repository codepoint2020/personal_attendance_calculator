<?php

$current_grade = "";
$id = 0;

if (isset($_GET["g"])) {
    $current_grade = $_GET["g"];
} 

if (isset($_POST["btn_update"])) {
    $new_attendance = $_POST["cur_no_attendance"];
    $id = $_POST["id"];

    $update_query = $conn->query("UPDATE grade_levels SET no_attendance = $new_attendance WHERE id = $id ; ");
    
    if ($update_query) {
        $_SESSION['update_id'] = $id; 
        header("Location: update_confirmation.php");
    }
}






