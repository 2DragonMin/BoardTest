<?php
    session_start();
    /*
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    */

    $connect = mysqli_connect("localhost", "ymlee", "Dydals89!", "db") or die("Db Connect fali");
    $query_list = "select * from story order by id desc";
    $result_list = $connect->query($query_list);
    
    $result['paging'] = array(
                    'startPage' => $startP,
                    'endPage' => $endP,
                    'totalBlock' => $totalB,
                    'totalPage' => $totalP,
                    'pageperblock' => $ppb,
                    'rowsByPage' => $rbP,
                    'total' => $totalCount,
                    'block' => $block,
                    'page' => $page
    );
    
    $startP = 1;
    $rbP = 5;
    $offset = ($_POST['page'] - 1) * $limit;
    $query_page = "select * from story order by id desc limit ".$offset.', '.$limit;
    $result_page = $connect->query($query_page);
    
    /*
    if($page <= 1){
        echo "<li class='disabled'>first</li>";
    } else {
        echo "<li><a href='/index.php?page=1'>first</a></li>";
    }
    
    for($i = $block_s; $i <= $block_e; $i++){
        if($page == $i){
            echo "<li class='disabled'>[$i]</li>";
  		} else {
            echo "<li><a href='/index.php?page=$i'>[$i]</a></li>";
        }
    }  
    
    if($block >= $total_block){
    } else {
        $nextt = $page + 1;
        echo "<li><a href='/index.php?page=1$next'>next</a></li>";
    }
    
    if($page >= $total_page){
        echo "<li class='disabled'>last</li>";
    } else {
        echo "<li><a href='/index.php?page=$total_page'>last</a></li>";
    }
    */
    if($result_list){
        $a_data = array();
        while($rows = mysqli_fetch_assoc($result_list)){
            array_push($a_data, array('id'=>$rows['id'], 'title'=>$rows['title'], 'time'=>$rows['reg_time']));
        }
    }
    
    echo json_encode($a_data);
?>
