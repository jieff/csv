<?php

    require './conexao.php';
   
    $file = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];

    $ext = explode(".", $name);

    $extension = end($ext);

    if($extension != "csv"){
        echo "Extens�o Inv�lida";
    } else {

        $object = fopen($file, 'r');

        // Pegar o campo numerocelular, telefonefixo da A mil e insere no campo numero do bemtevi
        while(($data = fgetcsv($object, 1000, ",")) !== FALSE)
        {
            
            $cli_clientes_codcliente = mb_convert_encoding($data[0], "utf-8");

            $telefonefixo    = mb_convert_encoding($data[15], "utf-8");
            $numerocelular   = mb_convert_encoding($data[16], "utf-8");
             
            $telefonefixo    = $mysqli->query("INSERT INTO cli_celulares ( cli_clientes_codcliente, numero ) VALUES ( $cli_clientes_codcliente,  '$numerocelular' )");
            $numerocelular   = $mysqli->query("INSERT INTO cli_celulares ( cli_clientes_codcliente, numero ) VALUES ( $cli_clientes_codcliente,  '$telefonefixo' )");
        
            $mysqli->query("DELETE FROM cli_celulares WHERE numero='1'");
            $mysqli->query("DELETE FROM cli_celulares WHERE numero=''");

        }
 

        if($telefonefixo == true && $numerocelular == true){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
