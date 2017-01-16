<?php
session_start();
require_once('connect.php');

error_reporting(E_ALL);
include_once('simple_html_dom.php');
if (isset($_POST['productId'])) {
    
	// Extract - pobranie obiektowego modelu dokumentu z URL
	$html = file_get_html('http://www.ceneo.pl/'.$_POST["productId"]);
	$_SESSION['productId'] = $_POST["productId"];
	header('Location: index-e.php');
}
?>