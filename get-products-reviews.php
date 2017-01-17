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
	
	for($id=50;$id<10000;$id++)
    {
		$products = "SELECT model FROM produkt WHERE id='$id'";
		$result = $connect->query($products);	

		if ($result->num_rows > 0) {
	    
	    while($row = $result->fetch_assoc()) {
	    	echo '<div class="box-header with-border">';
	              echo '<h3 class="box-title"><i class="fa fa-user"></i>'.$row["model"].'</h3>';
	        echo '</div>';
    	}
		} else {
		  //  echo "0 results";
		}
	 

	 
		$reviews = "SELECT * FROM opinia WHERE produkt_id='$id'";
		$r = $connect->query($reviews);

		if ($r->num_rows > 0) {
	    
	    	while($row = $r->fetch_assoc()) {
	    		echo "<h4>ID opinii ceneo.pl: ".$row['id_opinii_ceneo']."</h4>";
	       		echo " <b>Podsumowanie:</b> " . $row["podsumowanie"]."<br>"."<b>Wady:</b> " . $row["wady_produktu"]."<br>". " <b>Zalety:</b> " . $row["zalety_produktu"]."<br>". " <b>Liczba gwiazdek:</b> " . $row["liczba_gwiazdek"]."<br>". " <b>Autor:</b> " . $row["autor_opinii"]. "<br>". " <b>Data wystawienia opinii:</b> " . $row["data_wystawienia_opinii"]. "<br>". "<br>";
	    	}
		} else {
		  //   echo "0 results";
		}	
	}
}

?>