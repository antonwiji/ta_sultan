<?php
session_start();
require 'cek_login.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Login Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
  <!-- massage login -->
  <div class="container">
      <div class="row">
          <div class="col-12 d-flex justify-content-center">
        <?php if (isset($error)) : ?>
        <div class="alert alert-danger w-50">
        <a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a> Username/Password Anda Salah!
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION["pesan"])) : ?>
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><?= $_SESSION["pesan"]; ?>
            </div>
        <?php endif; ?>
        
            </div>
            </div>
            

<!-- Login Form -->

<main class="form-signin">
  <form method="POST" action="">
   
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="usurname" name="username">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button name="login" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
   
  </form>
</main>
</div>


    
  </body>
</html>
