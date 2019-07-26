<?php
    require_once("db.cls.php");

    $dbcon = new CLS_DB();
    $dbcon->connect();

    $title = $_POST['title'];
    $contents = $_POST['contents'];
    $date = date('Y-m-d H:i:s');
    $depth = 0;

    $tmpfile = $_FILES['file']['tmp_name'];
    if($tmpfile){
        $o_name = $_FILES['file']['name'];
        $fileName = md5(iconv("UTF-8", "EUC-KR", $_FILES['file']['name']));
        $fileDir = "/var/webdata/".$fileName;
        
        move_uploaded_file($tmpfile, $fileDir);    
    }

    $idx = "ALTER TABLE story AUTO_INCREMENT = 1";
    $idx_result = $dbcon->execute($idx);
    
    $query = "INSERT INTO story (title, contents, reg_time, depth, upFile, hashFile) VALUES ('$title', '$contents', '$date', '$depth', '$o_name', '$fileName')";
    $dbcon->execute($query);

    $getId = "SELECT MAX(id) FROM story";
    $resultId = $dbcon->getId($getId);

    $upquery = "UPDATE story SET grpNum = '$resultId[0]' WHERE id = '$resultId[0]'";
    $result = $dbcon->execute($upquery);

    if($result){ ?>
        <script>
            alert("success<?php echo "$fileDir";?>");
            location.replace("/index.php");
        </script>    
    <?php
    } else { 
        echo "$resultId[0]";
        echo "FAIL";
    }    

    mysqli_cloase($dbcon);
?>