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
<div class="container" style="font-family: Verdana, Arial, sans-serif; padding-top: 1%;">
		<div class="row">
			<div id="homePage" style="margin-left: 85%;">
				<a href="index.php"><span class="glyphicon glyphicon-home" style="word-spacing: -10px;">Strona główna</span></a>
				<a href="csv-export.php"><span class="glyphicon glyphicon-download" style="word-spacing: -10px;">Eksportuj do CSV</span></a>
				<a href="remove-reviews-products.php"><span class="glyphicon glyphicon-remove" style="word-spacing: -10px;">Wyczyść bazę danych</span></a>
			</div>
			<div id="pole" class="col-sm-12 col-lg-12" >
				<p>
					<?php
						include_once('get-products-reviews.php');
					?>

				</p>
			</div>
		</div>
	</div>
</body>
</html>