<?php

	$connect = mysqli_connect("localhost", "ymlee", "qwe123", "db") or die("DB connection failed");

	$id = $_POST['id'];
	$pwd = $_POST['pwd'];
 
	$query = "INSERT INTO account (Id, Password) VALUES ('$id', '$pwd')";
	
	$result = $connect->query($query);
	if($result){
?>	<script>
		alert("Success.");
		location.replace("index.php");
	</script>
<?php
	}
	else{
?>	<script>
		alert("fail.");
	</script>
<?php	}	
	mysqli_close($connect);
?>
