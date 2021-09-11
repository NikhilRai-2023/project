<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include '_dbconnect.php';
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$exists=false;
if(($password==$cpassword)&&$exists==false){
  $sql="INSERT INTO user (`username`, `password`, `dt`) VALUES ('$username', '$password',current_timestamp())";
  $result=mysqli_query($conn, $sql);
  if($result){
    $showAlert=true;
  }
}
else{
  $showError = "Password do not match";
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>register</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #banner-image {
  background-image: url(https://www.geu.ac.in/content/dam/geu/Image-Galleries/geu-carousel/geu-front.jpg);
  width: auto;
  height: 650px;
  background-size: cover;
  background-position: auto;
  background-repeat:no-repeat;
}

        </style>
  </head>
  <body>
  <?php
  if($showAlert){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Signup Successful!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>'; 
}
if($showError){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong>'.$showError.' 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>'; 
}
?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://www.geu.ac.in/content/dam/geu/geu-logo.svg" alt="" width="300" height="100" class="d-inline-block align-text-top">
    </a>
  </div>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
          <a class="navbar-brand" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="navbar-brand" href="login.php">Login</a>
        </li> 
        <li class="nav-item">
          <a class="navbar-brand" aria-current="page" href="register.php">Register</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>


<div id="banner-image" width="100%" alt="banner-image">
<div class="center">
      <h1>Signup</h1>
      <form method="post" action="signup.php">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password"required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" name="cpassword" required>
          <span></span>
          <label>Confirm Password</label>
        </div>
        
        <input type="submit" value="Signup">
        
      </form>
</body>
</html>