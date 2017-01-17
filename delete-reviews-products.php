<?php
session_start();
require_once('connect.php');
$connect = @new mysqli($host, $db_user, $db_password, $db_name);
$connect->query("SET CHARSET utf8");
$connect->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
if ($connect->connect_errno!=0) {
    echo "Error: ".$connect->connect_errno;
}
else
{	
	$sql = "truncate opinia;";
	$result = $connect->query($sql);
	
	if($result){
		$sql1 = "DELETE FROM produkt;";
		$connect->query($sql1);
	}

	echo "Usunięto opinie z bazy danych!";
}
$connect->close();
?>