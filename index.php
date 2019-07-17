<!doctype html>
<?php 

session_start();

?>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	    <meta name="generator" content="Jekyll v3.8.5">
	    <title>Board example · Bootstrap</title>

	    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
	    <!-- Bootstrap core CSS -->
	    <link href="/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script src="https://kit.fontawesome.com/ef773e0dc4.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

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
        
        #page_num {
            margin-left : 260px;
            margin-top : 30px;
        }

        #page_num ul li{
            float : left;
            margin-left : 10px;
            text-align : center;
        }
        
	    </style>
        <script>
        var page = 1;
        function paging(i){
            page = i;
            return page;
        }
            $.ajax({
                type : 'get',
                url : 'list.php?page='+page,
                dataType : 'json',
                data : {
                    page : page
                },
                success : function(data){
                    $.each(data.boardData, function(list, item){
                        $('#list').append('<tr><td align="center">'+item.id+
                                '</td><td align="center"><a href="view.php?id='+item.id+'">'+item.title+
                                '</a></td><td align="center">'+item.time+
                                '</td></tr>');
                    });
                    console.log(data);
                    if(data.page <= 1){
                        $('#paging').append('<li class="disabled">first</li>');
                    } else {
                        $('#paging').append('<li><a href="/index.php?page=1">first</a></li>');
                    }
                    for(var i = data.bstart; i <= data.bend; i++){
                        if(data.page == i){
                            $('#paging').append('<li class="disabled">'+i+'</li>');
                        } else {
                            $('#paging').append('<li><a href="/index.php?page='+i+'">'+i+'</a></li>');
                            console.log(i);
                            paging(i);
                        }
                    }
                    if(data.page >= data.ptotal){
                        $('#paging').append('<li class="disabled">last</li>');
                    } else {
                        $('#paging').append('<li><a href="/index.php?page="'+data.ptotal+'">last</a></li>');
                    }
                }
            });
        </script>
    </head>
    <body>
    <?php
    $connect = mysqli_connect("localhost", "ymlee", "Dydals89!", "db") or die ("connect fail");
    
    //session_start();
    /*
    $search = $_GET['search'];	
    $search_query = "select * from story where title like '%$search%'";
    $search_result = $connect->query($search_query);
    $search_total = mysqli_num_rows($search_total);

    if($search == null){
    	$total_page = ceil($total/$list);
    } else {
	    $total_page = ceil($search_total/$list);
    }
    
    $query2 = "select * from story order by id desc limit $start_num, $list";
    $result2 = $connect->query($query2);
    $total2 = mysqli_num_rows($result2);
    */
    ?>
    <header>
	    <div class="collapse bg-dark" id="navbarHeader">
	        <div class="container">
		        <div class="row">
		            <div class="col-sm-8 col-md-7 py-4">
			            <h4 class="text-white">About</h4>
			            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
		            </div>
		            <div class="col-sm-4 offset-md-1 py-4">
			            <h4 class="text-white">Contact</h4>
			            <ul class="list-unstyled">
                    <?php
                    if(isset($_SESSION['uid'])){ ?>
			            <li><a href="logout.php" class="text-white">logout</a></li>
                        <li><a class="text-white">Welcome <?php echo $_SESSION['uid']?></a></li>
		            <?php } else { ?>
				        <li><a href="sign-in.html" class="text-white">Sign in</a></li>
				        <li><a href="sign-up.html" class="text-white">Sign up</a></li>
		            <?php } ?>
			            </ul>
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
        <section class="jumbotron text-center">
	        <div class="container">
	            <h1 class="jumbotron-heading">Board example</h1>
	            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
	            <p>
                    <a href="/index.php" class="btn btn-primary my-2">Main call to action</a>
		            <a href="/write.php" class="btn btn-secondary my-2"><i class="fas fa-edit"></i></a>
	            </p>
	        </div>
        </section>
        <div class="jumbotron">
	        <div class="container">
	            <form name="title" action="/index.php" method="get">
	            <input type="text" name="search" placeholder="input title."/>
	            <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
	            </form>
                <!-- <div id="list"></div> --> 
                <table class="table table-striped">
	                <thead>
	                    <tr align = "center">
		                <th>Number</th>
		                <th>Title</th>
		                <th>Time</th>
	                    </tr>
	                </thead>
	                <tbody id="list">
                    </tbody>
                </table>
                <div id="page_num">
                    <ul class="list-inline" id="paging"> 
                        <script> // var page = $('ul < li.active').text(); </script>
                    </ul>
                </div>
            </div>
        </div>
        <?php }  else { ?>
        <section class="jumbotron text-center">
	        <div class="container">
	            <h1 class="jumbotron-heading">Board example</h1>
	            <p class="lead text-muted">please sign in</p>
	        </div>
        </section>
    <?php } ?>
    </main>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
            <a href="#">Back to top</a>
            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="https://getbootstrap.com/docs/4.3/getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    </body>
</html>

                    <?php /*
		            if($search == null){
                    ?>
                    <?php } else {
				    while($rows = mysqli_fetch_assoc($search_result)){
                    ?>
	                    <tr>
		                <td align = "center"><?php echo $rows['id']?></td>
		                <td align = "center">
		                <a href = "view.php?id=<?php echo $rows['id']?>">
                        <?php echo $rows['title']?></td>
                        <td align = "center"><?php echo $rows['reg_time']?></td>
                        </tr>
                    <?php }
		            } */ ?>
                    <!--
                <div id="paging">
                    <ul class="pagination">
                    <?php /*                    
                    if($page <= 1){
                        echo "<li class='disabled'>first</li>";
                    } else {
                        echo "<li><a href='/index.php?page=1'>first</a></li>";
                    }
                    
                    for($i = $block_s; $i <= $block_e; $i++){
                        if($page == $i){
                            echo "<li class='disabled'>[$i]</li>";
                        } else {
                            echo "<li><a href='/index.php?page=$i'>[$i]</a></li>";
                        }
                    }  
                    
                    if($block >= $total_block){
                    } else {
                        $nextt = $page + 1;
                        echo "<li><a href='/index.php?page=1$next'>next</a></li>";
                    }
                    
                    if($page >= $total_page){
                        echo "<li class='disabled'>last</li>";
                    } else {
                        echo "<li><a href='/index.php?page=$total_page'>last</a></li>";
                    } */?>
                    </ul>
                </div>
            </div>
        </div>
        -->
