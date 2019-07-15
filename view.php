<!doctype html>
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
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    .bd-placeholder-img {
       font-size: 1.125rem;
       text-anchor: middle;
      -webkit-user-select: none;
       -moz-user-select: none;
       -ms-user-select: :none;
       user-select: none;
    }   

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
       }
    }  
    </style>
</head>

<body>
    <?php
    session_start();
    
    $connect = mysqli_connect("localhost", "ymlee", "Dydals89!", "db") or die ("connect fail");
    $id = $_GET['id'];
    $query = "select * from story where id = $id";
    $result = $connect->query($query);
    $rows = mysqli_fetch_assoc($result);

    $query_comment = "select * from comment where pid = $id order by cno desc";
    $result_comment = $connect->query($query_comment);
//    $rows_comment = mysqli_fetch_assoc($result_comment);
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
                    <tr>
                        <th>Title</th>
                        <td><?php echo $rows['title']?></td>
                        <th>Number</th>
                        <td><?php echo $rows['id']?></td>
                        <th>Time</th>
                        <td><?php echo $rows['reg_time']?></td>	
                    </tr>
                    <tr>
                        <th>Contents</th>
                        <td><?php echo $rows['contents']?></td>
                    </tr>
                </table>
                <table class="table table-striped">
                    <div class="reply_view">
                        <div><h5>Comment List</h5>
                            <tr>
                                <th>User</th>
                                <th>Comment</th>
                            </tr>
                            <?php while($rows_comment = mysqli_fetch_assoc($result_comment)) { ?>
                            <tr>
                                <td><?php echo $rows_comment['uid']?></td>
                                <td><?php echo $rows_comment['comment']?></td>
                            </tr>
                            <?php } ?>
                        </div>
                    </div>
                </table>
                <table class="table table=striped"> 
                <form action="comment.php" method="POST">
                    <tr>
                        <td><label for="comment">Coment</label></td>
                        <td><input type="hidden" value=<?php echo $id?> name="pid"></td>
                        <td><textarea rows="1" cols="55" name="comment" id="comment"></textarea></td>
                        <td><button class="btn btn-secondary" type="submit">Coment Up</button></td>
                    </tr>
                </form>
                </table>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="../dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
