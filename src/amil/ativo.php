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
            
            $codcliente = mb_convert_encoding($data[0], "utf-8");
            $ativa      = mb_convert_encoding($data[1], "utf-8");

            if($ativa == "true"){
                $ativa = 0; //situação ativa no sistema
            } else {
                $ativa = 1; //situação inativa no sistema
            }

            $result = $mysqli->query("UPDATE cli_clientes SET situacao=$ativa WHERE codcliente=$codcliente");
                                    
        }
 

        if($result ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
