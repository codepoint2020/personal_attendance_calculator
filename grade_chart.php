<?php

include 'inc/config.php';
include 'inc/process.php';


//Query Kinder data
$k_report = $conn->query("SELECT * FROM grade_levels WHERE grade_id_no = 0 ");
$k_result = $k_report->fetch_assoc();


//Query Grade 1 data
$g1_report = $conn->query("SELECT * FROM grade_levels WHERE grade_id_no = 1 ");
$g1_result = $g1_report->fetch_assoc();

//Query Grade 2 data
$g2_report = $conn->query("SELECT * FROM grade_levels WHERE grade_id_no = 2 ");
$g2_result = $g2_report->fetch_assoc();

//Query Grade 3 data
$g3_report = $conn->query("SELECT * FROM grade_levels WHERE grade_id_no = 3 ");
$g3_result = $g3_report->fetch_assoc();

//Query Grade 4 data
$g4_report = $conn->query("SELECT * FROM grade_levels WHERE grade_id_no = 4 ");
$g4_result = $g4_report->fetch_assoc();


//Query Grade 5 data
$g5_report = $conn->query("SELECT * FROM grade_levels WHERE grade_id_no = 5 ");
$g5_result = $g5_report->fetch_assoc();

//Query Grade 6 data
$g6_report = $conn->query("SELECT * FROM grade_levels WHERE grade_id_no = 6 ");
$g6_result = $g6_report->fetch_assoc();

//Kinder percentage attendance
$k_percent = (intval($k_result["no_attendance"]) / intval($k_result["no_teachers"])) * 100;

//Kinder percentage attendance
$g1_percent = (intval($g1_result["no_attendance"]) / intval($g1_result["no_teachers"])) * 100;
//Kinder percentage attendance

$g2_percent = (intval($g2_result["no_attendance"]) / intval($g2_result["no_teachers"])) * 100;
//Kinder percentage attendance

$g3_percent = (intval($g3_result["no_attendance"]) / intval($g3_result["no_teachers"])) * 100;
//Kinder percentage attendance

$g4_percent = (intval($g4_result["no_attendance"]) / intval($g4_result["no_teachers"])) * 100;

//Kinder percentage attendance
$g5_percent = (intval($g5_result["no_attendance"]) / intval($g5_result["no_teachers"])) * 100;

//Kinder percentage attendance
$g6_percent = (intval($g6_result["no_attendance"]) / intval($g6_result["no_teachers"])) * 100;

$k_percent = number_format((float)$k_percent, 2, '.', '');
$g1_percent = number_format((float)$g1_percent, 2, '.', '');
$g2_percent = number_format((float)$g2_percent, 2, '.', '');
$g3_percent = number_format((float)$g3_percent, 2, '.', '');
$g4_percent = number_format((float)$g4_percent, 2, '.', '');
$g5_percent = number_format((float)$g5_percent, 2, '.', '');
$g6_percent = number_format((float)$g6_percent, 2, '.', '');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/bootstrap.css">
  <link rel="stylesheet" href="grade_chart.css">
  <title>Document</title>
</head>
<body>



<div class="container justify-content-center align-items-center">
  <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="pie no-round text-center" style="--p:<?php echo $k_percent; ?>;--c:pink;--b:15px"> <?php echo $k_percent . '%'; ?>
            <small class="form-text text-center">KINDER</small>
          </div>
        </div>
  </div>

  <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="pie no-round text-center" style="--p:<?php echo $g1_percent; ?>;--c:red;--b:15px"> <?php echo $g1_percent . '%'; ?>
          <small class="form-text text-center">GRADE I</small>
        </div>
        <div class="pie no-round text-center" style="--p:<?php echo $g2_percent; ?>;--c:yellow;--b:15px"> <?php echo $g2_percent . '%'; ?>
          <small class="form-text text-center">GRADE II</small>
        </div>
        <div class="pie no-round text-center" style="--p:<?php echo $g3_percent; ?>;--c:green;--b:15px"> <?php echo $g3_percent . '%'; ?>
          <small class="form-text text-center">GRADE III</small>
        </div>
      </div>
  </div>

  <div class="row justify-content-center">
      <div class="col-md-6">
      <div class="pie no-round text-center" style="--p:<?php echo $g4_percent; ?>;--c:blue;--b:15px"> <?php echo $g4_percent . '%'; ?>
        <small class="form-text text-center">GRADE IV</small>
      </div>
      <div class="pie no-round text-center" style="--p:<?php echo $g5_percent; ?>;--c:orange;--b:15px"> <?php echo $g5_percent . '%'; ?>
        <small class="form-text text-center">GRADE V</small>
      </div>
      <div class="pie no-round text-center" style="--p:<?php echo $g6_percent; ?>;--c:purple;--b:15px"> <?php echo $g6_percent . '%'; ?>
        <small class="form-text text-center">GRADE VI</small>
      </div>
      
  </div>

</div>


    
  
    
    
  
</body>
</html>




