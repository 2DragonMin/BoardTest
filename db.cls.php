<?php
class CLS_DB
{
    var $db_host;
    var $db_name;
    var $db_user;
    var $db_passwd;
    var $connection;

    function CLS_DB()
    {

	$this->db_host = "localhost";
	$this->db_name = "db";
	$this->db_user = "ymlee";
	$this->db_passwd = "qwe123";
    }

    function connect()
    {
	$this->connection = mysqli_connect($this->db_host, $this->db_user, $this->db_passwd, $this->db_name);
	if (!$this->connection) {
	    return false;
	}

	return true;
    }

    function close()
    {
	if ($this->connection) {
	    $this->connection->close();
	}
    }

    function get($query)
    {
	$arr = array();
	if (($result = mysqli_query($this->connection, $query))) {
	    $i = 0;
	    while (($row = mysqli_fetch_array($result, MYSQLI_NUM))) {
		$arr[$i] = $row;
		$i++;
	    }
	    mysqli_free_result($result);
	} else {
	    return NULL;
	}

	return $arr;
    }

    function execute($query)
    {
	if (($stmt = mysqli_prepare($this->connection, $query))) {
	    $ret = mysqli_execute($stmt);
	    mysqli_stmt_close($stmt);
	} else {
	    return 0;
	}
	if (!$ret) return 0;
	return 1;
	}
	
	function getId($query){
		if($result = mysqli_query($this->connection, $query)){
			$row = mysqli_fetch_array($result);
			return $row;
		} else {
			return 0;
		}
	}
}

?>

