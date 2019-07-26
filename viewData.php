<?php
        session_start();

        $id = $_GET['id'];

        require_once("db.cls.php");

        $dbcon = new CLS_DB();
        $dbcon->connect();
        
        $query = "select title, id, reg_time, contents, upFile, hashFile from story where id = $id";
        $result = $dbcon->get($query);
    
        $query_comment = "select uid, comment from comment where pid = $id order by cno desc";
        $result_comment = $dbcon->get($query_comment);

        $result_View['view'] = $result;
        $result_View['comment'] = $result_comment;

        echo json_encode($result_View);
?>