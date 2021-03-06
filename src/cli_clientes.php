<?php

    require './conexao.php';
   

    $file = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];

    $ext = explode(".", $name);

    $extension = end($ext);

    if($extension != "csv"){
        echo "Extens?o Inv?lida";
    } else {

        $object = fopen($file, 'r');

        while(($data = fgetcsv($object, 1000, ",")) !== FALSE)
        {
            
            $codcliente           = intval(mb_convert_encoding($data[0], "utf8")); //int 
            $nome                 = mb_convert_encoding($data[1], "utf-8");
            $cpfcnpj              = mb_convert_encoding($data[3], "utf-8"); //(1 - pessoafisica - 2 pessoa juridica)
            $datanascimento        = mb_convert_encoding($data[4], "utf-8");
            $rg                   = mb_convert_encoding($data[5], "utf-8");
            $estadocivil          = intval(mb_convert_encoding($data[6], "utf-8")); //int (1 - solteiro - 2 - casado - 3 divorciado, etc...)
            $inscricaoestadual    = mb_convert_encoding($data[10], "utf-8");
            $nomepai              = mb_convert_encoding($data[11], "utf-8");
            $nomemae              = mb_convert_encoding($data[12], "utf-8");
            $nomefantasia         = mb_convert_encoding($data[13], "utf-8");
            $obs                  = mb_convert_encoding($data[29], "utf-8");


            //formata a data do cliente para o padr?o Y-m-d
            $datanascimento = new DateTime($datanascimento);
            $datanascimento = $datanascimento->format('Y-m-d');

            $pessoafisica = strlen($cpfcnpj);

            $cpf = 11;
    
            if($pessoafisica == null){
                $pessoafisica = 1; //CPF
            }
              
            if($pessoafisica <= $cpf){
                $pessoafisica = 1; //CPF
            } else {
                $pessoafisica = 0; //CNPJ
            }
            
            $result = $mysqli->query("INSERT INTO cli_clientes (codcliente, nome, cpfcnpj, datanascimento, pessoafisica, rg, estadocivil, inscricaoestadual, nomepai, nomemae, nomefantasia, obs ) 
            VALUES( $codcliente, '$nome', '$cpfcnpj', '$datanascimento', $pessoafisica, '$rg', $estadocivil, '$inscricaoestadual', '$nomepai', '$nomemae', '$nomefantasia', '$obs')");
            
        }
            
        if($result){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }
    }
