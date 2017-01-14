<?php
require_once('connect.php');

error_reporting(E_ALL);
include_once('simple_html_dom.php');

// Extract - pobranie obiektowego modelu dokumentu z URL
$html = file_get_html('http://www.ceneo.pl/'.$_POST["productId"]);

// Transform
// Zaciągnięcie rodzaju, marki, modelu i dodatkowych uwag urządzenia 
$productType = $html->find('.breadcrumbs span', 2)->plaintext;
echo $productType;
$productBrand = $html->find('li.attr-value.a.dotted-link', 3)->plaintext;
echo $productBrand;
$productModel = $html->find('.product-name', 0)->plaintext;
echo $productModel;
$productAdditional = $html->find('.ProductSublineTags', 0)->plaintext;
echo $productAdditional;

// Zaciągnięcie wszystkich opinii ze strony
foreach($html->find('li.product-review') as $article) {
	$item['cons'] = $article->find('div.cons-cell', 0)->plaintext;
	$item['pros'] = $article->find('div.pros-cell', 0)->plaintext;
	$item['review'] = $article->find('p.product-review-body', 0)->plaintext;
	$item['score'] = $article->find('span.review-score-count', 0)->plaintext;
    $item['reviewer']     = $article->find('div.product-reviewer', 0)->plaintext;
    $item['date']     = $article->find('span.review-time', 0)->plaintext;
    $item['recommended']    = $article->find('em.product-recommended', 0)->plaintext;
    $item['votes']    = $article->find('span.js_product-review-usefulness', 0)->plaintext;
    $articles[] = $item;
}

var_dump($articles);

//Load - połączenie i załadowanie do bazy danych

//Łączenie z bazą danych
$connect = @new mysqli($host, $db_user, $db_password, $db_name);

// Sprawdzanie połączenia i zasilenie bazy danych
if ($connect->connect_errno!=0) {
    echo "Error: ".$connect->connect_errno;
}
else{
	$connect->query("INSERT INTO produkt VALUES (NULL, '$productType', '$productBrand', '$productModel', '$productAdditional')");

	echo "Zasilono bazę danych :)";

	$connect->close();

}
?>