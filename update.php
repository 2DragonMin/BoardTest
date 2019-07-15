<?php
	$connect = mysqli_connect("localhost", "ymlee", "Dydals89!", "db") or die("fail");

	$title = $_POST['title'];
	$contents = $_POST['contents'];
	
	$query = "insert into story(title, contents, reg_time) values('$title', '$contents', now())";	

	$result = $connect->query($query);
	if($result){
?>		<script>
		alert("Success");
		location.replace("../index.html");
		</script>
<?php
	}
	else{
?>		<script>
			alert("fail");
		</script>
<?php
	}

	mysqli_close($connect);
?>
