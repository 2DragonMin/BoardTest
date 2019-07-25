<?php
    session_start();
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $search = $_GET['search']; 

	require_once("db.cls.php");
	
	$dbcon = new CLS_DB();
    $dbcon->connect();
    
    if($search != null){
        $query_list = "select id, title, reg_time, depth, grpNum from story where title like '%$search%' order by id, asc, grpNum desc";
    } else {
        $query_list = "select id, title, reg_time, depth, grpNum from story order by id desc, grpNum desc, id asc";
    }
	$boardData = $dbcon->get($query_list);
    $count = count($boardData);
    
	$list = 10;

    $start_num = ($page-1) * $list;
    
    if($search != null){
        $query_page = "select id, title, reg_time, depth, grpNum from story where title like '%$search%' order by grpNum desc, id asc limit $start_num, $list";    
    } else {
        $query_page = "select id, title, reg_time, depth, grpNum from story order by grpNum desc, id asc limit $start_num, $list";
    }
    $result_page = $dbcon->get($query_page);
    
	$boardList = array(
        'page' => $page,
        'count' => $count,
        'ptotal' => $page_total,
        'boardList' => $list
    );

    $boardList['boardData'] = $result_page;

    echo json_encode($boardList);
?>
