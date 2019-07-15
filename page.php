<?php
    session_start();
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = 1;
    } 

    $connect = mysqli_connect("localhost", "ymlee", "Dydals89!", "db") or die("Db Connect fali");
    $query_total = "select * from story order by id desc";
    $result_total = $connect->query($query_total);
    $count = mysqli_num_rows($result_total);

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

    if($result_page){
        $p_data = array(
            'page' => $page,
            'total_page' => $page_total,
            'block' => $block,
            'block_start' => $block_s,
            'block_end' => $block_e,
            'block_total' => $block_total
        );
    }
    
    echo json_encode($p_data);
?>
