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
            
            $name      = utf8_encode($data[1]);
            $email     = utf8_encode($data[2]);
            $whatsApp  = utf8_encode($data[3]);
            $status    = utf8_encode($data[4]);

            $result = $mysqli->query("INSERT INTO leads (nome, email, whatsapp, situacao ) VALUES('$name', '$email', '$whatsApp', '$status')");
        }
            
        if($result){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados";
        }
    }
