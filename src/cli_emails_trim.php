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

            $cli_clientes_codcliente     = mb_convert_encoding($data[0], "utf-8"); //int
            $email1                      = mb_convert_encoding($data[1], "utf-8");
            $email2                      = mb_convert_encoding($data[2], "utf-8");
            $email3                      = mb_convert_encoding($data[3], "utf-8");
            $email4                      = mb_convert_encoding($data[4], "utf-8");


            if(!empty($email1)){
                $email1 = $mysqli->query("INSERT INTO cli_emails ( cli_clientes_codcliente, email ) 
                                        VALUES ( $cli_clientes_codcliente, '$email1' )"); 
            } 
                
           if(!empty($email2)){
                $email2 = $mysqli->query("INSERT INTO cli_emails ( cli_clientes_codcliente, email ) 
                                        VALUES ( $cli_clientes_codcliente, '$email2' )"); 
           }
            

           if(!empty($email3)){
                $email3 = $mysqli->query("INSERT INTO cli_emails ( cli_clientes_codcliente, email ) 
                                        VALUES ( $cli_clientes_codcliente, '$email3' )");
           }
           
           if(!empty($email4)){
                $email4 = $mysqli->query("INSERT INTO cli_emails ( cli_clientes_codcliente, email ) 
                                        VALUES ( $cli_clientes_codcliente, '$email4' )"); 
           }
                 
        }
        
            //apagar os registos que estão em branco
            $mysqli->query("DELETE FROM cli_emails WHERE email='	'");
 

            echo "Formatacao cli_emails realizada com sucesso";

    }


            
