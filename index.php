<!doctype html>
<?php session_start(); ?>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	    <meta name="generator" content="Jekyll v3.8.5">
		<meta http-equiv="Content-Script-Type" content="text/javascript">
		<meta http-equiv="Content-Style-Type" content="text/css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Publisher" content="advantapp" />
        <title>Board example · Bootstrap</title>
        
        <link href="basic.css" rel="stylesheet">
	    <!-- Bootstrap core CSS -->
	    <link href="/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- FontAwesome CSS -->
		<link href="/css/all.css" rel="stylesheet">
		<!-- jquery js -->
		<script src="/jquery-3.4.1.min.js"></script>
		<!--board js -->
		<script src="/boardTest.js"></script>
    </head>
    <body>
    <header>
	    <div class="collapse bg-dark" id="navbarHeader">
	        <div class="container">
		        <div class="row">
		            <div class="col-sm-8 col-md-7 py-4">
						<h4 class="text-white">About</h4>
					</div>
		            <div class="col-sm-4 offset-md-1 py-4">
			            <h4 class="text-white">Contact</h4>
			            <ul class="list-unstyled">
                    <?php
                    if(isset($_SESSION['uid'])){ ?>
			            <li><a href="logout.php" class="text-white">logout</a></li>
                        <li><a class="text-white">Welcome <?php echo $_SESSION['uid']?></a></li>
					<?php } ?>
		            </div>
		        </div>
	        </div>
	    </div>
	    <div class="navbar navbar-dark bg-dark shadow-sm">
	        <div class="container d-flex justify-content-between">
		        <a href="index.php" class="navbar-brand d-flex align-items-center">
	            <i class="fas fa-bars"></i>
	            <strong>Board</strong>
		        </a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		        </button>
	        </div>
	    </div>
    </header>
    <main role="main">
    <?php 
    if(isset($_SESSION['uid'])){ ?>
        <div class="jumbotron">
	        <div class="container">
				<div class='left-box'>
	            	<form id="title" method="get">
	                	<input type="text" name="title" placeholder="input title."/>
	                	<button class="btn btn-secondary" type="button" id="btn-sch">
                    	<i class="fas fa-search"></i></button>
					</form>
				</div>
				<div class='right-box'>
					<select id="lc" name="listcount" onchange="changeListcount()">
						<option value="ten">10</option>
						<option value="fif">15</option>
						<option value="twen">20</option>
					</select>
				</div>
				<div>
                	<table class="table table-striped">
	               		<thead>
	                 		<tr align="center">
		                	<th>Number</th>
		                	<th>Title</th>
							<th>Time</th>
							<th>Views</th>
	                    	</tr>
	                	</thead>
	                	<tbody id="list"> </tbody>
					</table>
				</div>
				<div>
					<!--
					<button class="btn btn-basic" style="float: right;"><i class="fas fa-edit"></i>     Modify</button>
					<button class="btn btn-basic" id="btn-del" style="float: right;"><i class="fas fa-trash"></i>    Delete</button>
					<a href="/delete.php" class="btn btn-primary my-2" style="float: left;">Delete		<i class="fas fa-trash"></i></a>
					-->
				</div>
                <div id="page_num">
					<ul class="list-inline" id="paging"> </ul>
				</div>
				<div>
					<a href="/index.php" class="btn btn-primary my-2" style="float: right;">Main call to action</a>
					<a href="/write.php" class="btn btn-secondary my-2" style="float: right;">Write		<i class="fas fa-edit"></i></a>
				</div>
            </div>
        </div>
        <?php }  else { ?>
        <section class="jumbotron text-center">
	        <div class="container">
				<?php echo ("<script> location.href='/sign-in.php';</script>"); ?>
	        </div>
        </section>
    <?php } ?>
    </main>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
            <a href="#">Back to top</a>
            </p>
        </div>
    </footer>
	<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	<script src="/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    </body>
</html>
