<?php
	require_once("db.cls.php");

	$dbcon = new CLS_DB();
	$dbcon->connect();

	$id = $_POST['id'];
	$pwd1 = $_POST['pwd1'];
	$pwd2 = $_POST['pwd2'];

	$checkIdsql = "SELECT Id FROM account WHERE Id = '$id'";
	$resultId = $dbcon->get($checkIdsql);	
	$count = count($resultId);

	if($count == 0 && $pwd1 == $pwd2 && strlen($pwd1) >= 8 && strlen($pwd1) <= 15){
		$idx = "ALTER TABLE account AUTO_INCREMENT = 1";
		$idx_result = $dbcon->execute($idx);

		$hash = password_hash($pwd1, PASSWORD_DEFAULT);

		$query = "INSERT INTO account (Id, Password) VALUES ('$id', '$hash')";
		$result = $dbcon->execute($query);

		$val = 's';
		echo json_encode($val);
	} else {
		$val = 'e';
		echo json_encode($val);
	}
	$dbcon->close();
?>
