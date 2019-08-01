<?php
    require_once("db.cls.php");

    $dbcon = new CLS_DB();
    $dbcon->connect();

    $num = $_GET['Num'];

    echo $num;
    
    $delstsql = "DELETE FROM story WHERE id=$num";
    $delstresult = $dbcon->execute($delstsql);

    if($delstresult){
        $delcmsql = "DELETE FROM comment WHERE pid=$num";
        $delcmresult = $dbcon->execute($delcmsql);
        if($delcmresult) { ?>
        <script>
            alert("del success.");
            location.replace("/index.php");
        </script>
    <?php }
    }
    
    $dbcon->close();
?>