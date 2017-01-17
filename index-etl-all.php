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
	<div class="row" style="font-family: Verdana, Arial, sans-serif;">
    	<div class="col-md-12 col-sm-12 col-xs-12">
    		<div id="reviews" style="margin-left: 89%; padding-top: 1%;">
				<a href="reviews.php" target="_blank"><span class="glyphicon glyphicon-star">Wyświetl opinie</span></a>
			</div>
     		<div class="box">
     			<div class="box-header with-border">
	              <h3 class="box-title" style="text-align: center;"><i class="fa fa-user"></i> Proces ETL</h3>
	            </div>

     			<form name="etlForm" class="form-horizontal" method="post">
					<div class="box-body">
						<div class="form" style="text-align: center;">
                  			<input name="productId" type="text" placeholder="Wprowadz identyfikator produktu" required pattern="{0,100}" size="50">
                  			<span>
	                  			<button type="submit" class="btn btn-success" name="ETL" formaction="etl.php">
					       			<span aria-hidden="true"></span>ETL
					        	</button>
					        </span>
							<span>
	                  			<button type="submit" class="btn btn-success" name="E" formaction="e.php">
					       			<span aria-hidden="true"></span>E
					        	</button>
					        </span>
			            </div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div id="pole" class="col-sm-12 col-lg-12" style="text-align: center;">
				<?php
					session_start();
					echo "Pobrano dane produktu o identyfikatorze: ".$_SESSION['productDane']." ";
					echo "Jest nim ".$_SESSION['model']." oraz ".$_SESSION['reviews']." opinii, które zasiliły bazę danych!";
					session_unset();
				?>
			</div>
		</div>
	</div>
</body>
</html>