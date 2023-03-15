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
            
            $descricao = mb_convert_encoding($data[0], "utf-8");
  

            $result = $mysqli->query("INSERT INTO pat_localizacoes (descricao) VALUES ('$descricao')");
        }
 
        if($result ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
