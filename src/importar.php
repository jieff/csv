<?php

    require './conexao.php';
    mysqli_set_charset($mysqli, "utf8");

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
            
            //$codcliente           = utf8_encode($data[0]);
            $nome                 = utf8_encode($data[1]);
            $cpfcnpj              = utf8_encode($data[2]); //(1 - pessoafisica - 2 pessoa juridica)
            $rg                   = utf8_encode($data[3]);
            $estadocivil          = utf8_encode($data[4]); //int (1 - solteiro - 2 - casado - 3 divorciado, etc...)
            $inscricaoestadual    = utf8_encode($data[5]);
            $nomepai              = utf8_encode($data[6]);
            $nomemae              = utf8_encode($data[7]);
            $nomefantasia         = utf8_encode($data[8]);
            $obs                  = utf8_encode($data[9]);
            

            $pessoafisica = strlen($cpfcnpj);

            //echo gettype($pessoafisica);
            $cpf = 11;
            //echo "<pre>";
            //echo print_r($nome);
            //echo print_r($pessoafisica);
            //echo "</pre>"; exit;

            if($pessoafisica == null){
                $pessoafisica = 1; //CPF
            }
              
            if($pessoafisica <= $cpf){
                $pessoafisica = 1; //CPF
            } else {
                $pessoafisica = 0; //CNPJ
            }
           
            //print_r($nome);
            //print_r($pessoafisica);
           
            //exit;
            //print_r($pessoafisica);
            //exit;


            


            $result = $mysqli->query("INSERT INTO cli_clientes (nome, cpfcnpj, pessoafisica, rg, estadocivil, inscricaoestadual, nomepai, nomemae, nomefantasia, obs ) 
            VALUES ('$nome', '$cpfcnpj', $pessoafisica, '$rg', $estadocivil, '$inscricaoestadual', '$nomepai', '$nomemae', '$nomefantasia', '$obs')");
            
        }
            
        if($result){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }
    }
