<?php
        $filehash = $_GET['filehash'];

        require_once("db.cls.php");

        $dbcon = new CLS_DB();
        $dbcon->connect();
        
        $query = "SELECT upFile FROM story WHERE hashFile='$filehash'";
        $result = $dbcon->get($query);

        $filename = $result[0][0];
        $fileDir = "/var/webdata/".$filehash;

        header("Content-type: application/x-octetstream"); 
        header("Content-Length: ".filesize("$fileDir")); 
        header("Content-Disposition: attachment; filename=".iconv('utf-8','euc-kr',$filename));
        header('Content-Transfer-Encoding: binary');

        $fp = fopen($fileDir, "r");
        fpassthru($fp);
        fclose($fp);
?>