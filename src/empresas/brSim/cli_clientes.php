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
            /**
             *  Pegas os seguintes valores:
             *  
             *  id, nome, cpf ou cnpj, data de nascimento, rg,
             *  estado civil, inscrinção estadual, nome do pai, nome da mae, nome fantasia, obs
             * 
             */
            $codcliente            = intval(mb_convert_encoding($data[0], "utf8")); //int 
            
            $nome                  = mb_convert_encoding($data[1], "utf-8"); //  razao social

            $cpfcnpj               = mb_convert_encoding($data[2], "utf-8"); //(1 - pessoafisica - 2 pessoa juridica)


            $datanascimento        = mb_convert_encoding($data[3], "utf-8");

            if($datanascimento == '00/00/0000'){
                $datanascimento = '01/01/2023';
            }

            $datanascimento = str_replace("/", "-", $datanascimento);
            $datanascimento = date('Y-m-d', strtotime($datanascimento));

            $pessoa                = mb_convert_encoding($data[4], "utf-8");

            if($pessoa == 0 ){
                $inscricaoestadual = mb_convert_encoding($data[5], "utf-8");
            } 
            if($pessoa == 1) {
                $rg                = mb_convert_encoding($data[5], "utf-8");
            }

            $nomefantasia          = mb_convert_encoding($data[6], "utf-8");
           
            $inscricaomunicipal    = mb_convert_encoding($data[7],"utf-8");

            
            $result = $mysqli->query("INSERT INTO cli_clientes (codcliente, nome, cpfcnpj, datanascimento, rg, inscricaoestadual, nomefantasia, inscricaomunicipal ) 
            VALUES( $codcliente, '$nome', '$cpfcnpj', '$datanascimento', '$rg', '$inscricaoestadual', '$nomefantasia', '$inscricaomunicipal')");
            
            echo('dado inserido com sucesso');
            exit;
        }
      
        if($result){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }
    }
