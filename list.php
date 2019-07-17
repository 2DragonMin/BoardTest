<?php
    session_start();
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $connect = mysqli_connect("localhost", "ymlee", "Dydals89!", "db") or die("Db Connect fali");
    $query_list = "select * from story order by id desc";
    $result_list = $connect->query($query_list);
    $count = mysqli_num_rows($result_list);
    
    $list = 5;
    $block = 5;

    $block_num = ceil($page/$block);
    $block_s = (($block_num - 1) * $block) + 1;
    $block_e = $block_s + $block - 1;

 	$page_total = ceil($count/$list);

    if($block_e > $page_total){
        $block_e = $page_total;
    }
    $block_total = ceil($page_total/$block);
    $start_num = ($page-1) * $list;
    
    $query_page = "select * from story order by id desc limit $start_num, $list";
    $result_page = $connect->query($query_page);

    $boardList = array(
        'page' => $page,
        'block' => $blocki,
        'ptotal' => $page_total,
        'btotal' => $block_total,
        'bstart' => $block_s,
        'bend' => $block_e,
        'count' => $count,
        'boardList' => $list
    );
    
    if($result_list){
        $boardData = array();
        while($rows = mysqli_fetch_assoc($result_page)){
            array_push($boardData, array('id'=>$rows['id'], 'title'=>$rows['title'], 'time'=>$rows['reg_time']));
        }
    }

    $boardList['boardData'] = $boardData;
    echo json_encode($boardList);
?>
