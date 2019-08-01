<!doctype html>
<?php
    $id = $_GET['id'];
?>
<html lang="en">
    <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Board example · Bootstrap</title>
    
    <link href="basic.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    <script src="https://kit.fontawesome.com/ef773e0dc4.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/viewTest.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.11/tinymce.min.js"></script>
    <script>
	    tinyMCE.init({
          selector:'#mce',
          branding:false,
          menubar:false,
      });
    </script>
</head>
<body>
    <?php
    $connect = mysqli_connect("localhost", "ymlee", "qwe123", "db") or die ("connect fail");

    $query = "select * from story where id = $id";
    $result = $connect->query($query);
    $rows = mysqli_fetch_assoc($result); 
    ?>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <strong>Board</strong>
                </a>
            </div>
        </div>
    </header>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <div>
                    <form action="write.php" method="POST">
                        <button class="btn btn-basic" style="float: right;"><i class="fas fa-edit"></i>     Modify</button>
                        <input type="hidden" value=<?php echo $id?> name="Num" />
                    </form>
                    <form action="delete.php" method="GET">
                        <button class="btn btn-basic" id="btn-del" style="float: right;"><i class="fas fa-trash"></i>    Delete</button>
                        <input type="hidden" value=<?php echo $id?> name="Num" />
                    </form>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr align="center">
                            <th>Number</th>
                            <th>Title</th>
                            <th>Time</th>
                            <th>File</th>
                        </tr>   
                    </thead>
                    <tbody id="viewData">
                    </tbody>
                </table>
                <table class="table table-striped">
                    <thead>
                        <tr><th>Contents</th></tr>   
                    </thead>
                    <tbody id="viewValue">
                    </tbody>
                </table>
                <table class="table table-striped">
                    <div class="reply_view">
                        <div><h5>Comment List</h5>
                        <thead>
                            <tr>
                                <th style="width:150px">User</th>
                                <th>Comment</th>
                            </tr>
                        </thead>
                        <tbody id="viewComment">
                        </tbody>
                        </div>
                    </div>
                </table>             
                <form id="comment" method="GET"> 
                    <table class="table table-striped">        
                    <thead><tr><th>Comment</th></tr></thead>
                    <tbody><tr>
                        <td><input type="text"  class="form-control" cols="55" name="c_text" id="text" placeholder="Input comment" required></td>
                        <td><button class="btn btn-secondary" type="button" id="btn-comup">Coment Up</button></td>
                    </tr></tbody>
                    </table>
                </form>
                <?php if($rows['depth'] == 0){ ?>
                    <form action="commentWrite.php" method="POST" novalidate>
                        <table class="table table=stripe">
                            <thead>
                                <tr><h5>Comment Board</h5>
                                <th>TITLE</th></tr>
                            </thead>
                            <tbody>
                                <tr><td><input type="text" class="form-control" name="title" placeholder="Input title" required></td></tr>      
                            </tbody>
                        </table>
                        <table class="table table=stripe">
                            <thead>
                                <tr><th>CONTENTS</th></tr>
                            </thead>
                            <tbody>
                                <tr><td><textarea name="contents" id="mce" rows="15" required></textarea></td></tr> 
                            </tbody>
                        </table>
                        <table>
                            <button class="btn btn-secondary" type="submit" style="float: right;">write Up     <i class="fas fa-upload"></i></button>
                            <input type="hidden" value=<?php echo $id?> name="grpNum" />
                        </table>
                    </form>
                <?php } ?>                
            </div>
            <table class="table table=stripe">
                    <button class="btn btn-primary" onclick="location.href='/index.php'" style="float: right;">Go to list   <i class="fas fa-undo"></i></button>
            </table>
        </div>
    </div>
</main>
<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="../docs/4.3/getting-started/introduction/">getting started guide</a>.</p>
    </div>
</footer>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	<script src="/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    </body>
</html>
