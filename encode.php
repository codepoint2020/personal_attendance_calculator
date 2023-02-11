<?php

include 'inc/config.php';
include 'inc/process.php';
include 'inc/header.php';

?>
    <title>UA App</title>
</head>
<body class="text-center">
    <form class="form-signin" action="index.php" method="POST">
        <!-- IF THERE IS ALREADY DATA -->
        <?php

            //temporary setting get id to 0
        if(isset($_GET["g"])) {
            $id = $_GET["g"];
        } else {
            $id = 0;
        }

        $conn = $conn->query("SELECT * FROM grade_levels WHERE grade_id_no = $id; ");
        $row = $conn->fetch_assoc();


        
        ?>
        <?php if($current_grade != ""): ?>
       <h1 class="h3"><?php  echo ucwords($row['grade_name']); ?> ATTENDANCE</h1>
      <h1 class="h4">Present: <h1>
      <p class="mb-3 h2"><?php echo $row['no_attendance']; ?></p>

      <h1 class="h4">Did not arrive yet: </h1>
      <p class="mb-3 h2"><?php echo '1'; ?></p>

      <?php ?>
      <a class="mt-4 btn btn-lg pink btn-block" href="form_encode.php?grade_id=<?php echo $row['id']; ?>">Edit</a>
      <?php ?>
      <button class="mt-4 btn btn-lg btn-success btn-block" name="btn_update">Update</button>
      <?php ?>
      <button class="mt-3 btn  btn-lg btn-secondary btn-block" name="btn_cancel_edit">CANCEL</button>

      <!-- IF THE VALUE IN ATT_COUNT IS 0 OR BLANK -->
      <?php else: ?>
      <label for="inputEmail">Enter the number of attendance in: </label>
      <p class="mb-3 h4"><?php echo 'Grade 1'; ?></p>
      <input type="number" id="inputEmail" class="form-control" placeholder="0" required autofocus>
      <button class="mt-4 btn btn-lg btn-success btn-block" name="btn_submit">Submit</button>
      <a class="mt-3 btn  btn-lg btn-secondary btn-block" href="index.php">CANCEL</a>

      <?php endif;?>
   
      

      
    </form>


    <script src="bootstrap/bootstrap.js"></script>
    <script src="script.js"></script>
</body>
</html>



    

    
   