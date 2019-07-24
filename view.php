<!doctype html>
<?php
    session_start();
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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Number</th>
                            <th>Time</th>
                            <th>Contents</th>
                        </tr>   
                    </thead>
                    <tbody id="viewData">
                    </tbody>
                </table>
                <table class="table table-striped">
                    <div class="reply_view">
                        <div><h5>Comment List</h5>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Comment</th>
                            </tr>
                        </thead>
                        <tbody id="viewComment">
                        </tbody>
                        </div>
                    </div>
                </table>
                <table class="table table=striped"> 
                <form action="comment.php" method="GET">
                    <tr>
                        <td><label for="comment">Comment</label></td>
                        <td><input type="hidden" value=<?php echo $id?> name="pid"></td>
                        <td><textarea rows="1" cols="55" name="comment" id="comment"></textarea></td>
                        <td><button class="btn btn-secondary" type="submit" id="btn-comup">Coment Up</button></td>
                    </tr>
                </form>
                </table>
                <?php if($rows['depth'] == 0){ ?>
                    <table class="table table=stripe">
                    <form action="commentWrite.php" method="POST">
                    <tr><label for="Comment Board"><h5>Comment Board</h5></label>
                        <!--
                            <td><input type="hidden" value=<?php //echo $rows['depth']?> name="p_depth"></td>
                        -->
                        <td><input type="hidden" value=<?php echo $rows['id']?> name="grpNum"></td>
                        <td><label for="Title">title</label><td>
                        <td><input type="text" class="form-control" name="title" placeholder="Input title"></td>
                        <td><label for="contents">CONTENTS</label><br></td>
                        <td><textarea name="contents" cols=50 rows=5 placeholder="Input contents" required></textarea></td>
                        <td><button class="btn btn-secondary" type="submit"><i class="fas fa-upload"></i></button></td>
                    </tr>
                    </form>
                    </table>
                <?php } ?>                
            </div>
            <div class="view_btn" align="center">
            <button class="btn btn-primary" onclick="location.href='/index.php'">Go to list</button>
            </div>
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
    <!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    -->
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    
    </body>
</html>
