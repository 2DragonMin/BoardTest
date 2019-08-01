<?php
    session_start();
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $count = $_GET['count'];
    $search = $_GET['search'];
    $listNum = $_GET['listNum'];

	require_once("db.cls.php");
	
	$dbcon = new CLS_DB();
    $dbcon->connect();
    
    $block = 10;

    $block_num = ceil($page/$block);
    $block_s = (($block_num - 1) * $block) + 1;
    $block_e = $block_s + $block - 1;

 	$page_total = ceil($count/$listNum);

    if($block_e > $page_total){
        $block_e = $page_total;
    }
    $block_total = ceil($page_total/$block);
    $start_num = ($page-1) * $listNum;
    
	$boardList = array(
        'listNum' => $listNum,
        'page' => $page,
        'block' => $block,
        'ptotal' => $page_total,
        'btotal' => $block_total,
        'bstart' => $block_s,
        'bend' => $block_e,
        'count' => $count
    );
    echo json_encode($boardList);
?>
