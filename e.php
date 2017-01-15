<?php
require_once('connect.php');

error_reporting(E_ALL);
include_once('simple_html_dom.php');
echo "działa";
// Extract - pobranie obiektowego modelu dokumentu z URL
$html = file_get_html('http://www.ceneo.pl/'.$_POST["productId"]);
?>