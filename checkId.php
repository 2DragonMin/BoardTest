<?php
	require_once("db.cls.php");

	$dbcon = new CLS_DB();
	$dbcon->connect();

	$uid = $_GET['uid'];
	
	$checkIdsql = "SELECT Id FROM account WHERE Id = '$uid'";
	$resultId = $dbcon->get($checkIdsql);

    echo json_encode($resultId);

	$dbcon->close();
?>
