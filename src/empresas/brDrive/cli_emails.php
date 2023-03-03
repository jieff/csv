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
           
            $codcliente      = intval(mb_convert_encoding($data[0], "utf8")); //int 
            
            $email1          = mb_convert_encoding($data[1], "utf-8"); 

            $email2          = mb_convert_encoding($data[2], "utf-8"); 

            $codtipocontato  = intval(mb_convert_encoding($data[3], "utf-8")); //int

            
            $result = $mysqli->query("INSERT INTO cli_emails (cli_clientes_codcliente, email, codtipocontato) 
            VALUES( $codcliente, '$email1', codtipocontato)");

            echo('test ok');
            exit;

            $result = $mysqli->query("INSERT INTO cli_emails (cli_clientes_codcliente, email, codtipocontato) 
            VALUES( $codcliente, '$email2', codtipocontato)");
            
        }
      
        if($result){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }
    }
