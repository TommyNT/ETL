<?php
require_once('e.php');


// Transform
// Zaciagniecie rodzaju, marki, modelu i dodatkowych uwag urzadzenia 
$productType = trim($html->find('.breadcrumbs span', 2)->plaintext);
echo "<br><b>Kategoria:</b> ".$productType;
$productBrand = $html->find('li.attr-value.a.dotted-link', 3)->plaintext;
echo "<br><b>Producent:</b> ".$productBrand;
$productModel = $html->find('.product-name', 0)->plaintext;
echo "<br><b>Produkt:</b> ".$productModel;
$productAdditional = $html->find('.ProductSublineTags', 0)->plaintext;
echo "<br><b>Opis:</b> ".$productAdditional."<p>";

// Zaciagniecie wszystkich opinii ze strony i sformatowanie
foreach($html->find('li.product-review') as $article) {
	$item['cons'] = trim(str_replace("Wady", "", preg_replace('/\s+/', ' ', $article->find('div.cons-cell', 0)->plaintext)));
	$item['pros'] = trim(str_replace("Zalety", "", preg_replace('/\s+/', ' ', $article->find('div.pros-cell', 0)->plaintext)));
	$item['review'] = trim(preg_replace('/\s+/', ' ', $article->find('p.product-review-body', 0)->plaintext));
	$item['score'] = trim($article->find('span.review-score-count', 0)->plaintext);
    $item['reviewer'] = trim($article->find('div.product-reviewer', 0)->plaintext);
    $item['date'] = trim($article->find('span.review-time', 0)->plaintext);
    $item['recommended'] = trim($article->find('em.product-recommended', 0)->plaintext);
    $item['vote-yes'] = trim(preg_replace('/\s+/', ' ', $article->find('button.vote-yes', 0)->plaintext));
    $item['vote-no'] = trim(preg_replace('/\s+/', ' ', $article->find('button.vote-no', 0)->plaintext));
    $articles[] = $item;
}

var_dump($articles);
?>