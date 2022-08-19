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
            /**
             *  Pegas os seguintes valores:
             *  
             *  id, nome, cpf ou cnpj, data de nascimento, rg,
             *  estado civil, inscrinção estadual, nome do pai, nome da mae, nome fantasia, obs
             * 
             */
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


            //formata a data do cliente para o padrão Y-m-d
            $datanascimento = new DateTime($datanascimento);
            $datanascimento = $datanascimento->format('Y-m-d');


            /** conta os caracteres vindo na string */
            $pessoafisica = strlen($cpfcnpj);

            /** atribuido valor 11 para separar CPF de CNPJ */
            $cpf = 11;
    
            /** verifica se o valor nulo, caso positivo recebe 1 como padrão, informando
             *  ao sistema que trata-se de um CPF
              */
            if($pessoafisica == null){
                $pessoafisica = 1; //CPF
            }
              
            /** verifica se o valor e menor que 11, caso positivo retorna 1 para CPF
             *  caso contrário retorna 0 para CNPJ
             */
            if($pessoafisica <= $cpf){
                $pessoafisica = 1; //CPF
            } else {
                $pessoafisica = 0; //CNPJ
            }
            
            /**
             *  realiza uma injeção de dados com os seguintes valores:
             * 
             *  id , nome, cpfcnpj, datanascimento, pessoafisica, rg, estadocivel, inscricaoestadual, nomedopai, nomedamae, nomefantasia, obs 
             */
            $result = $mysqli->query("INSERT INTO cli_clientes (codcliente, nome, cpfcnpj, datanascimento, pessoafisica, rg, estadocivil, inscricaoestadual, nomepai, nomemae, nomefantasia, obs ) 
            VALUES( $codcliente, '$nome', '$cpfcnpj', '$datanascimento', $pessoafisica, '$rg', $estadocivil, '$inscricaoestadual', '$nomepai', '$nomemae', '$nomefantasia', '$obs')");
            
        }
            
        /** verifica de a query foi executada no banco de dados
         *  e retorna uma mensagem ao solicitante
         */
        if($result){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }
    }
