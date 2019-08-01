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
        $query_list = "select id, title, reg_time from story where title like '%$search%'";
    } else {
        $query_list = "select id, title, reg_time from story order by id desc";
    }
    $result_list = $dbcon->get($query_list);
    $count = count($result_list);
    
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
     
      $query_page = "select id, title, reg_time from story where title like '%$search%' order by id desc limit $start_num, $list";
      //$result_page = $connect->query($query_page);
      $result_page = $dbcon->get($query_page);
  
      $boardList = array(
          'page' => $page,
          'block' => $block,
          'ptotal' => $page_total,
          'btotal' => $block_total,
          'bstart' => $block_s,
          'bend' => $block_e,
          'count' => $count,
          'search' => $search,
          'boardList' => $list
     );

      $boardList['boardData'] = $result_page;
      
      echo json_encode($boardList);

      $dbcon->close();
?>