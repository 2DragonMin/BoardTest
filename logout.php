<?php
    session_start();
    $result = session_destroy();

    if($result) { ?>
        <script>
            alert("logout success.");
            history.back();
        </script>
<?php } 
?>  
