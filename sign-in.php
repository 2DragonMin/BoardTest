<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v3.8.5">
		<title>Signin Template · Bootstrap</title>
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
		<script src="/common.js"></script>
	</head>
	
	<body class="text-center">
		<div class="container">
			<form id="signin" method="POST" class="form-signup" >
				<img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
				<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
				<input type="text" name="id" class="form-control" placeholder="ID" required autofocus>
				<input type="password" name="pwd" class="form-control" placeholder="Password" required>
				<div class="checkbox mb-3">
					<label><input type="checkbox" name="idchkbox"> Remember me</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="button" id="btn-signIn">Sign in</button>
			</form>
			<div class="form-signup">
				<button class="btn btn-lg btn-primary btn-block" style="float: center; width:300px" onclick="location.href='/sign-up.php'">Sign up</button>
				<p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
			</div>
		</div>
		<script type="text/javascript" src="/dist/js/bootstrap.min.js"></script>
	</body>
</html>

