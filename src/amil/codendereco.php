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
            
            $cli_clientes_codcliente    = mb_convert_encoding($data[0], "utf-8"); // pega o id do cliente
            $cli_enderecos_codendereco  = mb_convert_encoding($data[2], "utf-8"); // pega o codendereco

            $result = $mysqli->query("UPDATE fin_cobrancascliente SET cli_enderecos_codendereco='$cli_enderecos_codendereco' WHERE cli_clientes_codcliente='$cli_clientes_codcliente'");

        }
 
        if($result ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }

    
    }
