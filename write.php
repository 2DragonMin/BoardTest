<!doctype html>
<?php
  require_once("db.cls.php");

  $id = $_POST['Num'];
  
  $dbcon = new CLS_DB();
  $dbcon->connect();
  
  $sql = "SELECT title, contents FROM story WHERE id=$id";
  $result = $dbcon->get($sql);
  $title = $result[0][0];
  $contents = $result[0][1];

  $dbcon->close();
  
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
    <!-- FontAwesome CSS -->
    <link href="/css/all.css" rel="stylesheet">
    <!-- tinyMce js -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.11/tinymce.min.js"></script>
    <!-- jquery js -->
		<script src="/jquery-3.4.1.min.js"></script>
    <!--board js -->
    <script src="/boardTest.js"></script>
    <script>
	    tinyMCE.init({
          selector:'#mce',
          branding:false,
          menubar:false
      });
      
      function readURL(input){
        if (input.files && input.files[0]) { 
          var reader = new FileReader(); 
          reader.onload = function (e) { 
            $('#blah').attr('src', e.target.result); 
          }
          reader.readAsDataURL(input.files[0]); 
        }
      }
      
    </script>
  </head>
  <body>
  <header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
          <strong>Board</strong>
        </a>
      </div>
    </div>
  </header>
  <?php
  if($id == null){ ?>
    <form method="POST" action="write_action.php" enctype="multipart/form-data" novalidate>
    <div class="jumbotron">
      <div class="container">
        <table class="table table-striped">
          <thead> <tr><th><h3>TITLE</h3></th></tr> </thead>
          <tbody> <tr><td><input type="text" class="form-control" name="title" placeholder="Input title" required></td></tr> </tbody>
        </table>
        <table class="table table-striped">
          <thead> <tr><th><h3>CONTENTS</h3></th></tr> </thead>
          <tbody> <tr><td><textarea name="contents" id="mce" rows="15" required><?php echo $contents;?></textarea></td></tr> </tbody>
        </table>
        <table>
          <button class="btn btn-secondary" type="summit" style="float: right;">write Up <i class="fas fa-pen-alt"></i></button>
          <div>
            <input type="file" class="input-file-hidden" name="file" onchange="readURL(this)"/>
            <img id="blah" src="#" alt="your image"/>
          </div>
        </table>
      </div>
    </div>
  </form>
  <?php }
  else { ?>
    <form method="POST" action="modify_action.php" enctype="multipart/form-data" novalidate>
    <div class="jumbotron">
      <div class="container">
        <table class="table table-striped">
          <thead> <tr><th><h3>TITLE</h3></th></tr> </thead>
          <tbody> <tr><td><input type="text" class="form-control" name="title" value="<?php echo $title;?>" placeholder="Input title" required></td></tr> </tbody>
        </table>
        <table class="table table-striped">
          <thead> <tr><th><h3>CONTENTS</h3></th></tr> </thead>
          <tbody> <tr><td><textarea name="contents" id="mce" rows="15" required><?php echo $contents;?></textarea></td></tr> </tbody>
        </table>
        <table>
          <button class="btn btn-secondary" type="submit" style="float: right;">Modify Up<i class="fas fa-pen-alt"></i></button>
          <input type="hidden" value=<?php echo $id?> name="Num" />
        </table>
      </div>
    </div>
  </form>
  <?php } ?>
  
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
</footer>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	<script src="/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    </body>
</html>


