<?php

include 'inc/config.php';
include 'inc/process.php';
include 'inc/header.php';

?>
    <title>UA App</title>
</head>
<body class="text-center">
    <form class="form-signin">
      <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
      <h1 class="h4 mb-3 font-weight-normal">SELECT YOUR GRADE</h1>
      <a class="btn btn-primary btn-block pink" href="encode.php?g=0">Kinder</a>
      <a class="btn btn-danger btn-block" href="encode.php?g=1">Grade 1</a>
      <a class="btn btn-warning btn-block" href="encode.php?g=2">Grade 2</a>
      <a class="btn btn-success btn-block" href="encode.php?g=3">Grade 3</a>
      <a class="btn btn-primary btn-block" href="encode.php?g=4">Grade 4</a>
      <a class="btn btn-primary btn-block orange" href="encode.php?g=5">Grade 5</a>
      <a class="btn btn-primary btn-block purple" href="encode.php?g=6">Grade 6</a>

      
    </form>


    <script src="bootstrap/bootstrap.js"></script>
    <script src="script.js"></script>
</body>
</html>





    

    
   