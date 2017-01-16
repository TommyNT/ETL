<?php
session_start();
require_once('connect.php');

$connect = @new mysqli($host, $db_user, $db_password, $db_name);
$connect->query("SET CHARSET utf8");
$connect->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
if ($connect->connect_errno!=0) {
    echo "Error: ".$connect->connect_errno;
}
else
{
	
	for($id=50;$id<1000;$id++)
    {
		$products = "SELECT model FROM produkt WHERE id='$id'";
		$result = $connect->query($products);	

		if ($result->num_rows > 0) {
	    
	    while($row = $result->fetch_assoc()) {
	    	echo '<div class="box-header with-border">';
	              echo '<h3 class="box-title"><i class="fa fa-user"></i>'.$row["model"]."<br>".'</h3>';
	        echo '</div>';
    	}
		} else {
		  //  echo "0 results";
		}
	 

	 
		$reviews = "SELECT * FROM opinia WHERE produkt_id='$id'";
		$r = $connect->query($reviews);

		if ($r->num_rows > 0) {
	    
	    	while($row = $r->fetch_assoc()) {
	       		echo " Podsumowanie: " . $row["podsumowanie"]."<br>"."Wady: " . $row["wady_produktu"]. " Zalety: " . $row["zalety_produktu"]. " Liczba gwiazdek: " . $row["liczba_gwiazdek"]. " Autor: " . $row["autor_opinii"]. "<br>". "<br>";
	    	}
		} else {
		  //   echo "0 results";
		}	
	}
}

?>