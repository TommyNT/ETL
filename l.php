<?php
require_once('t.php');

//Load - polaczenie i zaladowanie do bazy danych

//Laczenie z baza danych
$connect = @new mysqli($host, $db_user, $db_password, $db_name);

// Sprawdzanie polaczenia i zasilenie bazy danych
if ($connect->connect_errno!=0) {
    echo "Error: ".$connect->connect_errno;
}
else{
	//Zasilenie tabeli produkt
	$connect->query("SET NAMES 'utf8'");
	$connect->query("INSERT INTO produkt VALUES (NULL, '$productType', '$productBrand', '$productModel', '$productAdditional')");
	//Zaciagniecie ID ostatnio dodanego produktu
	$produkt_id = $connect->insert_id;

	//Zasilenie tabeli opinia
	if(is_array($articles)){

	    $sql = "INSERT INTO opinia (id, produkt_id, wady_produktu, zalety_produktu, podsumowanie, liczba_gwiazdek, autor_opinii, data_wystawienia_opinii, polecam_nie_polecam, opinia_przydatna, opinia_nieprzydatna) VALUES ";
	    //Rozdzielenie elementow w tablicy dotyczacych opinii
	    $valuesArr = array();
	    foreach($articles as $row){


	        $wady_produktu = mysql_real_escape_string( $row['cons'] );
			echo "<br><br>";
	        $zalety_produktu = mysql_real_escape_string( $row['pros'] );
	        $podsumowanie = mysql_real_escape_string( $row['review'] );
	        $liczba_gwiazdek = mysql_real_escape_string( $row['score'] );
	        $autor_opinii = mysql_real_escape_string( $row['reviewer'] );
	        $data_wystawienia_opinii = mysql_real_escape_string( $row['date'] );
	        $polecam_nie_polecam = mysql_real_escape_string( $row['recommended'] );
	        $opinia_przydatna = mysql_real_escape_string( $row['vote-yes'] );
			$opinia_nieprzydatna = mysql_real_escape_string( $row['vote-no'] );
	        $valuesArr[] = "(NULL, '$produkt_id','$wady_produktu', '$zalety_produktu', '$podsumowanie', '$liczba_gwiazdek', '$autor_opinii', '$data_wystawienia_opinii', '$polecam_nie_polecam', '$opinia_przydatna','$opinia_nieprzydatna' )";
    }
	    $sql .= implode(',', $valuesArr);
	    var_dump($sql);
	    $connect->query($sql); 
	}
	$connect->close();

}
?>