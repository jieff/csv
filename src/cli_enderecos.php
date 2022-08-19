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

            /**
             *  valores a serem capturados para alimentar a tabela cli_enderecos
             * 
             *  codcliente, rua, complemento, bairro, cep, obs, cidade, estado
             * 
             */
            
            $cli_clientes_codcliente      = mb_convert_encoding($data[0], "utf-8"); //int
            $rua                          = mb_convert_encoding($data[18], "utf-8");
            $complemento                  = mb_convert_encoding($data[20], "utf-8");
            $bairro                       = mb_convert_encoding($data[22], "utf-8");
            $cep                          = mb_convert_encoding($data[23], "utf-8");
            $obs                          = mb_convert_encoding($data[28], "utf-8");
            $cidade                       = 145;
            $estado                       = 14;

            
           
            //insere os valores de rua, complemento, bairro, cep, obs
            $endereco = $mysqli->query("INSERT INTO cli_enderecos ( cli_clientes_codcliente, rua, complemento, bairro, cep, obs ) 
                                       VALUES ( $cli_clientes_codcliente,  '$rua', '$complemento', '$bairro', '$cep','$obs' )");  
            
            //insere o valor de cidade conforme id do cliente
            $cidade = $mysqli->query("UPDATE cli_enderecos SET sis_cidades_codcidade=$cidade WHERE cli_clientes_codcliente='$cli_clientes_codcliente'");

            //insere o valor de estado conforme id do cliente
            $estado = $mysqli->query("UPDATE cli_enderecos SET sis_cidades_sis_estados_codestado=$estado WHERE cli_clientes_codcliente='$cli_clientes_codcliente'");

        }
 
        
        /** Verifica se as query referente a endereço, cidade e estado 
         *  foram executadas, em caso de sucesso retorna mendagem de positivo, 
         *  em caso de error retorna mensagem de negativo
         */
        if($endereco == true && $cidade == true && $estado == true ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
