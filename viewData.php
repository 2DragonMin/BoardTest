<?php
        session_start();

        $id = $_GET['id'];

        require_once("db.cls.php");

        $dbcon = new CLS_DB();
        $dbcon->connect();
        
        $query = "select id, title, reg_time, contents, upFile, hashFile from story where id = $id";
        $result = $dbcon->get($query);
    
        $query_comment = "select uid, comment from comment where pid = $id order by cno desc";
        $result_comment = $dbcon->get($query_comment);

        $result_View['view'] = $result;
        $result_View['comment'] = $result_comment;

        $views = "update story set views = views+1 where id = $id";
        $dbcon->execute($views);

        echo json_encode($result_View);

        $dbcon->close();
?>