<?php
	session_start();
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
	<div class="row">
    	<div class="col-md-12 col-sm-12 col-xs-12">
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
					echo "Pomyślnie zasilono bazę danych!";
				?>
			</div>
		</div>
	</div>
</body>
</html>