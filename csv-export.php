<?php
require_once('connect.php');



    $connect = @new mysqli($host, $db_user, $db_password, $db_name);
    $connect->query("SET CHARSET utf8");
    $connect->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

    if ($connect->connect_errno!=0) {
        echo "Error: ".$connect->connect_errno;
    }
    else
    {
        $sql = "SELECT * FROM opinia";
        $result = $connect->query($sql);


        $headers = $result->fetch_fields();
        foreach($headers as $header) {
            $head[] = $header->name;
        }

        $fp = fopen('php://output', 'w');

        if ($fp && $result) {
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename="opinie.csv"');
            header('Pragma: no-cache');
            header('Expires: 0');
            fputcsv($fp, array_values($head)); 
            while ($row = $result->fetch_array(MYSQLI_NUM)) {
                fputcsv($fp, array_values($row));
            }
            die;
        }
    }

    $connect->close();
?>