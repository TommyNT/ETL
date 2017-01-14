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
	              <h3 class="box-title"><i class="fa fa-user"></i> Proces ETL</h3>
	            </div>

     			<form name="etlForm" class="form-horizontal" action="etl.php" method="post">
					<div class="box-body">
						<div>
                  			<input name="productId" type="text" placeholder="Wprowadź identyfikator produktu" required pattern="{0,100}" size="50">
                  			<span>
	                  			<button type="submit" class="btn btn-success" name="ETL">
					               			<span aria-hidden="true"></span>ETL
					        	</button>
					        </span>
			            </div>
				</form>
				<div class="btn-group btn-group-lg" role="group">
					<button type="button" class="btn btn-success" id="E">
				 		<span aria-hidden="true"></span>E
					</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


