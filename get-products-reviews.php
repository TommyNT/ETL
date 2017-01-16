<?php
start_session();
require_once('connect.php');

$connect = @new mysqli($host, $db_user, $db_password, $db_name);
if ($connect->connect_errno!=0) {
    echo "Error: ".$connect->connect_errno;
}
else{
	$products = "SELECT model FROM produkt";
	$result = $connect->query($products);

	if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $products = echo "model: " . $row["model"]."<br>";
    }
	} else {
	    echo "0 results";
	}

	reviews = "SELECT * FROM opinia";
	$r = $connect->query($reviews);

	if ($r->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Wady: " . $row["wady_produktu"]. " Zalety: " . $row["zalety_produktu"]. " Podsumowanie: " . $row["podsumowanie"]. " Liczba gwiazdek: " . $row["liczba_gwiazdek"]. " Autor: " . $row["podsumowanie"]. "<br>";
    }
	} else {
	    echo "0 results";
	}

	$conn->close();
}


?>