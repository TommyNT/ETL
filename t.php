<?php
session_start();
require_once('connect.php');

error_reporting(E_ALL);
include_once('simple_html_dom.php');

// Extract - pobranie obiektowego modelu dokumentu z URL
$html = file_get_html('http://www.ceneo.pl/'.$_SESSION["productId"]);

// Transform
// Zaciągnięcie rodzaju, marki, modelu i dodatkowych uwag urządzenia 
$productType = trim($html->find('.breadcrumbs span', 2)->plaintext);

$productBrand = $html->find('li.attr-value.a.dotted-link', 3)->plaintext;

$productModel = $html->find('.product-name', 0)->plaintext;

$productAdditional = $html->find('.ProductSublineTags', 0)->plaintext;


// Zaciągnięcie wszystkich opinii ze strony i sformatowanie
foreach($html->find('li.product-review') as $article) {
    $item['cons'] = trim(str_replace("Wady", "", preg_replace('/\s+/', ' ', $article->find('div.cons-cell', 0)->plaintext)));
    $item['pros'] = trim(str_replace("Zalety", "", preg_replace('/\s+/', ' ', $article->find('div.pros-cell', 0)->plaintext)));
    $item['review'] = trim(preg_replace('/\s+/', ' ', $article->find('p.product-review-body', 0)->plaintext));
    $item['score'] = trim($article->find('span.review-score-count', 0)->plaintext);
    $item['reviewer']     = trim($article->find('div.product-reviewer', 0)->plaintext);
    $item['date']     = trim($article->find('span.review-time', 0)->plaintext);
    $item['recommended']    = trim($article->find('em.product-recommended', 0)->plaintext);
    $item['vote-yes']    = trim(preg_replace('/\s+/', ' ', $article->find('button.vote-yes', 0)->plaintext));
    $item['vote-no']    = trim(preg_replace('/\s+/', ' ', $article->find('button.vote-no', 0)->plaintext));
    $item['reviewId']    = $article->find('button[data-review-id]', 0)->getAttribute('data-review-id');
    $articles[] = $item;
}

// var_dump($articles);
$_SESSION['articles'] = count($articles);
$_SESSION['productModel'] = $productModel;
header('Location: index-et.php');
?>