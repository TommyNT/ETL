<?php
error_reporting(E_ALL);
include_once('simple_html_dom.php');

// Create DOM from URL or file
$html = file_get_html('http://www.ceneo.pl/37384661');
?>
<html>
<pre value="<?php echo $html ?>"></pre>

// // Find all images 
// $title = $html->find('.product-name', 0)->plaintext;
// echo $title;

// // Find all article blocks
// foreach($html->find('ol.product-reviews') as $article) {
//     $item['reviewer']     = $article->find('div.product-reviewer', 0)->plaintext;
//     $item['recommended']    = $article->find('em.product-recommended', 0)->plaintext;
//     $item['score'] = $article->find('span.review-score-count', 0)->plaintext;
//     $item['review'] = $article->find('p.product-review-body', 0)->plaintext;
//     $item['pros'] = $article->find('div.pros-cell', 0)->plaintext;
//     $item['cons'] = $article->find('div.cons-cell', 0)->plaintext;
//     $articles[] = $item;
// }

// var_dump($articles);

