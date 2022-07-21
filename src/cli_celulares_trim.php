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

            $cli_clientes_codcliente      = mb_convert_encoding($data[0], "utf-8"); //int
            $numero1                      = mb_convert_encoding($data[1], "utf-8");
            $numero2                      = mb_convert_encoding($data[2], "utf-8");
            $numero3                      = mb_convert_encoding($data[3], "utf-8");
            $numero4                      = mb_convert_encoding($data[4], "utf-8");


            if(!empty($numero1)){
                $numero1 = $mysqli->query("INSERT INTO cli_celulares ( cli_clientes_codcliente, numero ) 
                                        VALUES ( $cli_clientes_codcliente, '$numero1' )"); 
            } 
                
           if(!empty($numero2)){
                $numero2 = $mysqli->query("INSERT INTO cli_celulares ( cli_clientes_codcliente, numero ) 
                                        VALUES ( $cli_clientes_codcliente, '$numero2' )"); 
           }
            

           if(!empty($numero3)){
                $numero3 = $mysqli->query("INSERT INTO cli_celulares ( cli_clientes_codcliente, numero ) 
                                        VALUES ( $cli_clientes_codcliente, '$numero3' )");
           }
           
           if(!empty($numero4)){
                $numero4 = $mysqli->query("INSERT INTO cli_celulares ( cli_clientes_codcliente, numero ) 
                                        VALUES ( $cli_clientes_codcliente, '$numero4' )"); 
           }
                 
        }


                //apagar os registos que estão em branco
                $mysqli->query("DELETE FROM cli_celulares WHERE numero='	'");
 

            echo "Formatação realizada com sucesso";

    }


            
