<?php
session_start();
require_once('connect.php');

error_reporting(E_ALL);
include_once('simple_html_dom.php');

// Extract - pobranie obiektowego modelu dokumentu z URL
$html = file_get_html('http://www.ceneo.pl/'.$_SESSION["productId"]);

// Transform
// Zaciągnięcie rodzaju, marki, modelu i dodatkowych uwag urządzenia 
$productType = trim($html->find('.breadcrumbs span', 2)->plaintext);

$productBrand = $html->find('li.attr-value.a.dotted-link', 3)->plaintext;

$productModel = $html->find('.product-name', 0)->plaintext;

$productAdditional = $html->find('.ProductSublineTags', 0)->plaintext;


// Zaciągnięcie wszystkich opinii ze strony i sformatowanie
foreach($html->find('li.product-review') as $article) {
    $item['cons'] = trim(str_replace("Wady", "", preg_replace('/\s+/', ' ', $article->find('div.cons-cell', 0)->plaintext)));
    $item['pros'] = trim(str_replace("Zalety", "", preg_replace('/\s+/', ' ', $article->find('div.pros-cell', 0)->plaintext)));
    $item['review'] = trim(preg_replace('/\s+/', ' ', $article->find('p.product-review-body', 0)->plaintext));
    $item['score'] = trim($article->find('span.review-score-count', 0)->plaintext);
    $item['reviewer']     = trim($article->find('div.product-reviewer', 0)->plaintext);
    $item['date']     = trim($article->find('span.review-time', 0)->plaintext);
    $item['recommended']    = trim($article->find('em.product-recommended', 0)->plaintext);
    $item['vote-yes']    = trim(preg_replace('/\s+/', ' ', $article->find('button.vote-yes', 0)->plaintext));
    $item['vote-no']    = trim(preg_replace('/\s+/', ' ', $article->find('button.vote-no', 0)->plaintext));
    $item['reviewId']    = $article->find('button[data-review-id]', 0)->getAttribute('data-review-id');
    $articles[] = $item;
}

//Load - polaczenie i zaladowanie do bazy danych

//Łączenie z bazą danych
$connect = @new mysqli($host, $db_user, $db_password, $db_name);
$connect->query("SET CHARSET utf8");
$connect->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
// Sprawdzanie połączenia i zasilenie bazy danych
if ($connect->connect_errno!=0) {
    echo "Error: ".$connect->connect_errno;
}
else{
	
	//Sprawdzenie w bazie, czy istnieje już produkt o podanym modelu
	$s = "SELECT * FROM produkt WHERE model='$productModel'";

	if($result = @$connect->query($s)){
		$model = $result->num_rows;
		if($model>0)
		{
			echo "W bazie istnieje już ".$productModel."! ";
			echo "<a href='index.php'>Kliknij</a>, aby spróbować ponownie.";
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
session_unset();
header('Location: index-etl.php')
?>