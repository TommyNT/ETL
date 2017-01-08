<?php
error_reporting(E_ALL);
include_once('simple_html_dom.php');

// Create DOM from URL or file
// $html = file_get_html('http://www.ceneo.pl/37384661');
?>
<html>
<head>
<meta charset="UTF-8"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="./styles.css"/>
	<title>ETL</title>
</head>
<body>
	<div class="container text-center">
		<div class="btn-group btn-group-lg" role="group">
			<button type="button" class="btn btn-default btn-lg" id="E">
 				<span aria-hidden="true"></span>E
			</button>
			<button type="button" class="btn btn-default btn-lg" id="T">
               			<span aria-hidden="true"></span>T
       			</button>
			<button type="button" class="btn btn-default btn-lg" id="L">
               			<span aria-hidden="true"></span>L
       			</button>
		</div><br><br>
		<div>
			<button type="button" class="btn btn-default btn-lg" id="ETL">
               			<span aria-hidden="true"></span>ETL
        		</button>
		</div>
	</div>
</body>
</html>

<!--
<pre value="<?php echo $html ?>"></pre>

// Find all images 
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

-->
