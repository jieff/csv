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

            
            $codcliente  = mb_convert_encoding($data[0], "utf-8"); //int
            $nome        = mb_convert_encoding($data[1], "utf-8");
            $email1      = mb_convert_encoding($data[2], "utf-8");
            $email2      = mb_convert_encoding($data[3], "utf-8");
            $telefone    = mb_convert_encoding($data[4], "utf-8");
            $celular     = mb_convert_encoding($data[5], "utf-8");

            $codtipocontato = 0;

            $contato = $mysqli->query("INSERT INTO cli_contatos ( codcliente, codtipocontato, nome, email, telefone, celular) 
                                   VALUES ( $codcliente, $codtipocontato, '$nome', '$email2', '$telefone', '$celular')"); 
        
        }
 

        if($contato == True ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
