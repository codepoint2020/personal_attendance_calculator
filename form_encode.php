<?php

include 'inc/config.php';
include 'inc/process.php';
include 'inc/header.php';

if (isset($_GET["grade_id"])) {
  $grade_id = $_GET["grade_id"];
} 

$conn = $conn->query("SELECT * FROM grade_levels WHERE grade_id_no = $grade_id; ");
$row = $conn->fetch_assoc();
$id = $row["id"];


?>
    <title>UA App</title>
</head>
<body>
<form action="form_encode.php" method="POST">
  <input type="hidden" value="<?php echo $id; ?>" name="id">
  <div class="form-group">
    <h1 class="h4"><?php echo ucwords($row["grade_name"]); ?></h1>
    <label for="cur_no_attendance">Attendance</label>
    <input type="email" class="form-control" id="cur_no_attendance" value="<?php echo $row["no_attendance"] ?>">
    <small id="emailHelp" class="form-text text-muted">Current number of attendance</small>
  </div>
  <button class="mt-4 btn btn-success btn-block" name="btn_update">Update</button>
  <a class="mt-3 btn btn-secondary btn-block" href="index.php">CANCEL</a>

</form>


    <script src="bootstrap/bootstrap.js"></script>
    <script src="script.js"></script>
</body>
</html>



    

    
   