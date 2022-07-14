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
            //$nome                         = mb_convert_encoding($data[24], "utf-8");
            $cidade                       = 145;
            $estado                       = 14;

            //echo gettype($cli_clientes_codcliente);
            //echo gettype($cidade);
            //echo gettype($estado);
            //exit;
            //echo $nome;
            //echo "<br>";
            //$cidade;
            //$estado;

            //$sql = "UPDATE cli_enderecos SET sis_cidades_codcidade='$nome'
            //        WHERE cli_clientes_codcliente=$cli_clientes_codcliente";
            //
            //$mysqli->query($sql); exit;

            //$sql = "SELECT codcidade, sis_estados_codestado, nome 
            //        FROM   sis_cidades
            //        WHERE nome='$nome'";
            //
            //$rows = $mysqli->query($sql);

            //foreach($rows as $row){
            //      
            //    echo "Nome da Cidade : " . $row["nome"];
            //
            //    exit;
            //}

            $result = $mysqli->query("INSERT INTO cli_enderecos ( cli_clientes_codcliente, sis_cidades_sis_estados_codestado, sis_cidades_codcidade ) 
                                    VALUES ( $cli_clientes_codcliente, $estado, $cidade )");  
            
        
        }
 

        if($result){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }


            
