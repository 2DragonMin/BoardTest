<?php
	
	$connect = mysqli_connect("localhost", "ymlee", "Dydals89!", "db") or die("fail");

	$title = $_POST['title'];
	$contents = $_POST['contents'];	
	$date = date('Y-m-d H:i:s');

	$query = "INSERT INTO story (title, contents, reg_time) VALUES ('$title', '$contents', '$date')";
	
	$result = $connect->query($query);
	if($result){
?>		<script>
			alert("Success");
			location.replace("/index.php");
		</script>
<?php	}
	else{
		echo "FAIL";
	}

	mysqli_close($connect);
?>
