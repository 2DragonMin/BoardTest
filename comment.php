<?php
    

    $connect = mysqli_connect("localhost", "ymlee", "Dydals89!", "db") or die ("connect fail");
    
    session_start();

    $cid = $_SESSION['uid'];
    $pid = $_POST['pid'];
    $comment = $_POST['comment'];

    $query = "insert into comment(uid, pid, comment) values('$cid', '$pid', '$comment')";
    $result = $connect->query($query);

    if($result){ ?>
        <script>
            alert("input comment success.");
            history.back();
        </script>
    <?php 
    }
    else{
        echo $cid."....".$comment;
    }
?>
