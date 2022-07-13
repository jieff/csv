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
            
            $cli_clientes_codcliente      = mb_convert_encoding($data[0], "utf-8"); //int
            $rua                          = mb_convert_encoding($data[18], "utf-8");
            $complemento                  = mb_convert_encoding($data[20], "utf-8");
            $bairro                       = mb_convert_encoding($data[22], "utf-8");
            $cep                          = mb_convert_encoding($data[23], "utf-8");
            $obs                          = mb_convert_encoding($data[28], "utf-8");

            //echo "Codigo: ";
            //echo $cli_clientes_codcliente;
            //echo "<br>";
            //echo "Rua: ";
            //echo $rua;
            //echo "<br>";
            //echo "Complemento: ";
            //echo $complemento;
            //echo "<br>";
            //echo "Bairro: ";
            //echo $bairro;
            //echo "<br>";
            //echo "Cep: ";
            //echo $cep;
            //echo "<br>";
            //echo "Endereco de Referencia: ";
            //echo $obs;
            //echo "<br>";
            //exit;
           
            $result = $mysqli->query("INSERT INTO cli_enderecos ( cli_clientes_codcliente, rua, complemento, bairro, cep, obs ) 
                                    VALUES ( $cli_clientes_codcliente,  '$rua', '$complemento', '$bairro', '$cep','$obs' )");  
            
        }
 

        if($result){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
