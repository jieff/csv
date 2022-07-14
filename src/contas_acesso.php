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
            
            $codcliente = mb_convert_encoding($data[2], "utf-8");
            $ativa      = mb_convert_encoding($data[3], "utf-8");

            if($ativa == "true"){
                $ativa = 0;
            } else {
                $ativa = 1;
            }

            //echo gettype($codcliente);
            //echo "<br>";
            //echo gettype($ativa);
            //exit;
          
            $result = $mysqli->query("UPDATE cli_clientes SET situacao=$ativa WHERE codcliente='$codcliente'");
            //exit;                            
        }
 

        if($result ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
