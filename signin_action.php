<?php
	require_once("db.cls.php");
	//ini_set("display_errors", "1");
	session_start();
	
	$dbcon = new CLS_DB();
	$dbcon->connect();

	$id = $_POST['id'];
	$pwd = $_POST['pwd'];
	$chk = $_POST['reChk'];

	$query = "SELECT Id, Password FROM account WHERE Id='$id'";
    $result = $dbcon->get($query);

	$hash = $result[0][1];
	$val = i;

	if(count($result)==1){
		if(password_verify($pwd, $hash)){
			$_SESSION['uid'] = $id;
			if(isset($_SESSION['uid'])){
				$val = 's';
				echo json_encode($val);
			}		
			else {
				echo "seession fail";
			}
		}
		else{
			$val = 'p';
			echo json_encode($val);
		}
	}
	else {
		$val = 'i';
		echo json_encode($val);
	}

	$dbcon->close();
?>
