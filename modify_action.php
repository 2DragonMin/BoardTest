<?php
    require_once("db.cls.php");

    $dbcon = new CLS_DB();
    $dbcon->connect();

    $num = $_POST['Num'];
    $title = $_POST['title'];
    $contents = $_POST['contents'];
    $date = date('Y-m-d H:i:s');
    $depthsql = "SELECT depth FROM story WHERE id=$num";
    $deresult = $dbcon->get($depthsql);
    $depth = $deresult[0][0];

    $title = str_replace("'", "''", $title);
    
    $query = "UPDATE story SET title='$title', contents='$contents', reg_time='$date', depth='$depth' WHERE id='$num'";
    
    /*
    $tmpfile = $_FILES['file']['tmp_name'];
    if($tmpfile){
        $o_name = $_FILES['file']['name'];
        $fileName = md5(iconv("UTF-8", "EUC-KR", $_FILES['file']['name'])._.date('Y-m-d H:i:s'));
        $fileDir = "/var/webdata/".$fileName;
        
        move_uploaded_file($tmpfile, $fileDir);    
    }
    */

    /*
    if($fileDir == null){
        $query = "UPDATE story SET title='$title', contents='$contents', reg_time='$date', depth='$depth' WHERE id='$num'";
    }
    else {
        $filesql = "SELECT upFile, hashFile FROM story WHERE id='$num'";
        $resultfile = $dbcon->execute($filesql);
        if($resultfile == 0){
            $query = "UPDATE story SET title='$title', contents='$contents', reg_time='$date', depth='$depth', upFile='$o_name', hashFile='$fileName' WHERE id='$num'";
        }
    }
    */
    $result = $dbcon->execute($query);

    if($result){ ?>
        <script>
            alert("success");
            location.replace("/view.php?id=<?php echo $num;?>");
        </script>    
    <?php
    } else { 
        echo "FAIL";
    }    
    
    $dbcon->close();
?>