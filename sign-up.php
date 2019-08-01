
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signup with Signin Template · Bootstrap</title>

    <link href="basic.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FontAwesome CSS -->
    <link href="/css/all.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="signup.css" rel="stylesheet">
    <!-- jquery js -->
    <script src="/jquery-3.4.1.min.js"></script>
    <!--board js -->
    <script src="/boardTest.js"></script>
  </head>
  
  <body class="text-center">
    <form method="POST" id="signup" class="form-signup">
      <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign Up</h1>
      <input type="text" name="id" class="form-control" placeholder="ID" required autofocus>
      <button class="btn btn-secondary" type="button" id="btn-IDchk" style="width:300px">ID_Check<i class="fas fa-check" style="float: right;"></i></button>
      <input type="password" name="pwd1" class="form-control" placeholder="Password" required>
      <input type="password" name="pwd2"class="form-control" placeholder="password Again" required>
      <button class="btn btn-lg btn-primary btn-block" type="button" id="btn-signUp">Sign up</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
      <footer>
        <script src="/dist/js/bootstrap.min.js"></script>
      </footer>
    </form>
  </body>
</html>

