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

        // Pegar o campo email da A mil e insere no campo email do bemtevi
        while(($data = fgetcsv($object, 1000, ",")) !== FALSE)
        {
            
            $cli_clientes_codcliente      = mb_convert_encoding($data[0], "utf-8");

            $email                        = mb_convert_encoding($data[14], "utf-8");
           
            $result                       = $mysqli->query("INSERT INTO cli_emails ( cli_clientes_codcliente, email ) 
                                                             VALUES ( $cli_clientes_codcliente,  '$email' )");  
            
        }
 

        if($result){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
