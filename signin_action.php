<?php
ini_set("display_errors", "1");
	session_start();
	
	$connect = mysqli_connect("localhost", "ymlee", "qwe123", "db") or die("connect failed");

	$id = $_POST['id'];
	$pwd = $_POST['pwd'];

	$query = "select * from account where id='$id'";
    $result = $connect->query($query);

	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_assoc($result);
		if($row['Password'] == $pwd){
			$_SESSION['uid'] = $id;
			if(isset($_SESSION['uid'])){
		?>	<script>
				alert("Join success");
				location.replace("index.php");
			</script>
	<?php		}		
			else {
				echo "seession fail";
			}
		}
		else{
?>		<script>
			alert("check ID or Password 1 <?php echo "$id...$pwd..." ?>");
			history.back();
		</script>
<?php		}
	}
	else {
	?>	<script>
			alert("check ID or Password 2.");
			history.back();
		</script>
<?php
	}
?>
