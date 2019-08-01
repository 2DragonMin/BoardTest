<?php
    session_start();
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $search = $_GET['search']; 
	$listNum = $_GET['listNum'];

	require_once("db.cls.php");
	
	$dbcon = new CLS_DB();
    $dbcon->connect();
    
    if($search != null){
        $query_list = "select id, title, reg_time, depth, grpNum, views from story where title like '%$search%' order by id, asc, grpNum desc";
    } else {
        $query_list = "select id, title, reg_time, depth, grpNum, views from story order by id desc, grpNum desc, id asc";
    }
	$boardData = $dbcon->get($query_list);
    $count = count($boardData);

    $start_num = ($page-1) * $listNum;
    
    if($search != null){
        $query_page = "select id, title, reg_time, depth, grpNum, views from story where title like '%$search%' order by grpNum desc, id asc limit $start_num, $listNum";    
    } else {
        $query_page = "select id, title, reg_time, depth, grpNum, views from story order by grpNum desc, id asc limit $start_num, $listNum";
    }
    $result_page = $dbcon->get($query_page);

    $boardList = array(
        'listNum' => $listNum,
        'page' => $page,
        'count' => $count,
        'ptotal' => $page_total,
        'boardList' => $listNum
    );

    $boardList['boardData'] = $result_page;

    echo json_encode($boardList);

    $dbcon->close();
?>
