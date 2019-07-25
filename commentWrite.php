<?php
    session_start();

    require_once("db.cls.php");
	
	$dbcon = new CLS_DB();
    $dbcon->connect();
    
    $title = $_POST['title'];
    $contents = $_POST['contents'];
    $date = date('Y-m-d H:i:s');
    $grpNum = $_POST['grpNum'];

    $getDepth_sql = "SELECT MAX(depth) FROM story WHERE grpNum = $grpNum";
    $resultDepth = $dbcon->getId($getDepth_sql);
    $p_depth = $resultDepth[0] + 1;

    $idx = "alter table story auto_increment = 1";
    $idx_result = $dbcon->execute($idx);
    
    $upquery = "UPDATE story set grpNum = '$grpNum' where id = '$grpNum'";
    $dbcon->execute($upquery);

    $query = "INSERT INTO story (title, contents, reg_time, depth, grpNum) VALUES ('$title', '$contents', '$date', '$p_depth', '$grpNum')";
    $result = $dbcon->execute($query);

    if($result){ ?>
        <script>
            alert("input comment success.");
            location.replace("index.php");
        </script>
    <?php 
    }
    else{
        echo $cid."....".$comment;
    }
?>
