<?php

    require './conexao.php';
   
    $file = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];

    $ext = explode(".", $name);

    $extension = end($ext);

    if($extension != "csv"){
        echo "Extensão Inválida";
    } else {

        $object = fopen($file, 'r');

     
        while(($data = fgetcsv($object, 1000, ",")) !== FALSE)
        {
            
            $codendereco  = mb_convert_encoding($data[1], "utf-8"); // pega o codendereco
            $codcliente    = mb_convert_encoding($data[3], "utf-8"); // id do cliente
            

            $result = $mysqli->query("UPDATE fin_cobrancasclienteplanos SET codendereco=$codendereco
                                     WHERE codcobrancasclienteplanos=$cli_clientes_codcliente");

        }
 
        if($result ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }

    
    }
