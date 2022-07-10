<?php

ini_set('max_execution_time', 0);

require 'conexao.php';

$filename = './files/leads.csv';

if(file_exists($filename)){
    
    if(mysqli_query($conn, "LOAD DATA INFILE '$filename' INTO TABLE leads
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS")){
        echo "Dados carregado com sucesso!";
    } else {
        echo "Dados não foram carregados!!";
    }
    

} else {
    echo 'não existe';
}