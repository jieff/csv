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

        // Pegar o campo numerocelular, telefonefixo da A mil e insere no campo numero do bemtevi
        while(($data = fgetcsv($object, 1000, ",")) !== FALSE)
        {
            
           
            $cli_clientes_codcliente = mb_convert_encoding($data[0], "utf-8");
            $numerocelular   = mb_convert_encoding($data[1], "utf-8");
             
            $numerocelular   = $mysqli->query("INSERT INTO cli_celulares ( cli_clientes_codcliente, numero ) VALUES ( $cli_clientes_codcliente,  '$numerocelular' )");
        
            echo('dado inserido com sucesso');
            exit;

        }
 
        /** verifica o retorno das variaveis e retorna mensagem ao solicitante */
        if($numerocelular){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
