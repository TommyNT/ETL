<?php
require_once('t.php');

//Load - polaczenie i zaladowanie do bazy danych

//Łączenie z bazą danych
$connect = @new mysqli($host, $db_user, $db_password, $db_name);

// Sprawdzanie połączenia i zasilenie bazy danych
if ($connect->connect_errno!=0) {
    echo "Error: ".$connect->connect_errno;
}
else{
	$connect->query("SET NAMES 'utf8'");
	//Sprawdzenie w bazie, czy istnieje już produkt o podanym modelu
	$s = "SELECT * FROM produkt WHERE model='$productModel'";

	if($result = @$connect->query($s)){
		$model = $result->num_rows;
		if($model>0)
		{
			echo "W bazie istnieje już taki produkt!";
		}else
		{
			//Zasilenie tabeli produkt
			$connect->query("INSERT INTO produkt VALUES (NULL, '$productType', '$productBrand', '$productModel', '$productAdditional')");
			//Zaciągnięcie ID ostatnio dodanego produktu
			$produkt_id = $connect->insert_id;
		}
	}

			//Zasilenie tabeli opinia
			if(is_array($articles)){

			    $sql = "INSERT INTO opinia (id, produkt_id, wady_produktu, zalety_produktu, podsumowanie, liczba_gwiazdek, autor_opinii, data_wystawienia_opinii, polecam_nie_polecam, opinia_przydatna, opinia_nieprzydatna, id_opinii_ceneo) VALUES ";
			    //Rozdzielenie elementów w tablicy dotyczących opinii
			    $valuesArr = array();
			    foreach($articles as $row){


			        $wady_produktu = mysql_real_escape_string( $row['cons'] );
			        $zalety_produktu = mysql_real_escape_string( $row['pros'] );
			        $podsumowanie = mysql_real_escape_string( $row['review'] );
			        $liczba_gwiazdek = mysql_real_escape_string( $row['score'] );
			        $autor_opinii = mysql_real_escape_string( $row['reviewer'] );
			        $data_wystawienia_opinii = mysql_real_escape_string( $row['date'] );
			        $polecam_nie_polecam = mysql_real_escape_string( $row['recommended'] );
			        $opinia_przydatna = mysql_real_escape_string( $row['vote-yes'] );
					$opinia_nieprzydatna = mysql_real_escape_string( $row['vote-no'] );
					$id_opinii_ceneo = mysql_real_escape_string( $row['reviewId'] );
			        $valuesArr[] = "(NULL, '$produkt_id','$wady_produktu', '$zalety_produktu', '$podsumowanie', '$liczba_gwiazdek', '$autor_opinii', '$data_wystawienia_opinii', '$polecam_nie_polecam', '$opinia_przydatna','$opinia_nieprzydatna', '$id_opinii_ceneo' )";
		    	}
			    $sql .= implode(',', $valuesArr);
			    // var_dump($sql);
				$connect->query($sql); 
					
			}

	$connect->close();

}
?>