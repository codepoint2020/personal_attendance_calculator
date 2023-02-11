<?php

include 'inc/config.php';
include 'inc/process.php';
include 'inc/header.php';

if (isset($_SESSION['update_id'])) {
  $updated_record_id = $_SESSION['update_id'];

}

$get_record = $conn->query("SELECT * FROM grade_levels WHERE id = $updated_record_id; ");
$row = $get_record->fetch_assoc();



?>
    <title>UA App</title>
</head>
<body >
<div class="px-4 py-5 my-5 text-center">
   
    <h1 class="display-5 fw-bold"><?php echo ucwords($row['grade_name']) . ' Attendance: ' . $row['no_attendance']; ?></h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Attendance has been updated</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="index.php" class="btn btn-primary btn-lg px-4 gap-3">Confirm</a>
     
      </div>
    </div>
  </div>

    <script src="bootstrap/bootstrap.js"></script>
    <script src="script.js"></script>
</body>
</html>





    

    
   