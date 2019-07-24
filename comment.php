<?php
    session_start();

    require_once("db.cls.php");
    $dbcon = new CLS_DB();
    $dbcon->connect();

    $cid = $_SESSION['uid'];
    $pid = $_GET['pid'];
    $comment = $_GET['comment'];

    $query = "INSERT INTO comment(uid, pid, comment) VALUES('$cid', '$pid', '$comment')";
    $result = $dbcon->execute($query);

    
    if($result){ ?>
        <script>
            //alert("input comment success.");
            history.back();
        </script>
    <?php 
    }
    else{
        echo $cid."....".$comment;
    }
?>
