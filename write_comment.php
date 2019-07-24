<?php
    require_once("db.cls.php");

    $dbcon = new CLS_DB();
    $dbcon->connect();

    $title = $_GET['title'];
    $contents = $_POST['contents'];
    $date = date('Y-m-d H:i:s');
    $grpNum = $_POST['grpNum'];

    $query = "INSERT INTO story (title, contents, reg_time,) VALUES ('$title', '$contents', '$date', '$grpNum')";
    $result = $dbcon->execute($query);

    if($result){ ?>
        <script>
            alert("success");
            location.replac("index.php");
        </script> 
<?php
    } else { 
        echo "FAIL";
    }    

    mysqli_cloase($dbcon);
?>