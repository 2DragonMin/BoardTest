<?php
    require_once("db.cls.php");

    $dbcon = new CLS_DB();
    $dbcon->connect();

    $num = $_GET['Num'];
    $title = $_GET['title'];
    $contents = $_GET['contents'];
    $date = date('Y-m-d H:i:s');
    $depthsql = "SELECT depth FROM story WHERE id=$num";
    $deresult = $dbcon->get($depthsql);
    $depth = $deresult[0][0];

    $title = str_replace("'", "''", $title);
    
    $query = "UPDATE story SET title='$title', contents='$contents', reg_time='$date', depth='$depth' WHERE id='$num'";
    $result = $dbcon->execute($query);

    if($result){ ?>
        <script>
            alert("success");
            location.replace("/index.php");
        </script>    
    <?php
    } else { 
        echo "FAIL";
    }    
    
    $dbcon->close();
?>