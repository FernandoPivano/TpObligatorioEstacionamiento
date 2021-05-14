<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Signin Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<!--link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin">
  <img class="mb-4" src="data:image/png;base64,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" alt="" width="72" height="72">
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
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
</form>


    
  </body>
</html>
