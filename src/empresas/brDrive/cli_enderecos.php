<?php

    require '../../database/conexao.php';
   
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
  
            $cli_clientes_codcliente    = intval(mb_convert_encoding($data[0], "utf-8")); //int
            $codcidade                  = intval(mb_convert_encoding($data[1], "utf-8")); // int
            $codestado                  = intval(mb_convert_encoding($data[2], "utf-8"));// int
            $endereco                   = mb_convert_encoding($data[3], "utf-8");
            $bairro                     = mb_convert_encoding($data[4], "utf-8");
            $numero                     = mb_convert_encoding($data[5], "utf-8");
            $cep                        = mb_convert_encoding($data[6], "utf-8");
            $complemento                = mb_convert_encoding($data[7], "utf-8");

            $endereco .= " " . $numero;

            
            $end = $mysqli->query("INSERT INTO cli_enderecos ( cli_clientes_codcliente, sis_cidades_codcidade, sis_cidades_sis_estados_codestado, rua, bairro, numeroEndereco, cep, complemento ) 
                                       VALUES ( $cli_clientes_codcliente, $codcidade, $codestado, '$endereco', '$bairro', '$numeroEndereco', '$cep', '$complemento' )");    
                                       
            echo('dado inserido com sucesso');
            exit;                            
            
        }
 
        if($end == true ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
