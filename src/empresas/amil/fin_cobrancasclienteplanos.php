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
             *  Aqui pega os código do plano e código de cobrança do cliente
             * 
             *  Tabela: fin_cobrancascliente
             *  Campos: fin_tipocobranca_codtiposcobranca
             *          codcobrancascliente
             * 
             */

             $cod_plano    = mb_convert_encoding($data[4], 'utf-8');
             $cod_cobranca = mb_convert_encoding($data[0], 'utf-8');
             $cod_endereco = mb_convert_encoding($data[6], 'utf-8');


            //formata a data do cliente para o padrão Y-m-d
            $dataativacao = new DateTime($dataativacao);
            $dataativacao = $dataativacao->format('Y-m-d');

            $datadesativacao = new DateTime($datadesativacao);
            $datadesativacao = $datadesativacao->format('Y-m-d');

            $datadesativado = new DateTime($datadesativado);
            $datadesativado = $datadesativado->format('Y-m-d');

            $com_dataVencimento = new DateTime($com_dataVencimento);
            $com_dataVencimento = $com_dataVencimento->format('Y-m-d');

            $bloqueioTemporarioDesdeDe = new DateTime($bloqueioTemporarioDesdeDe);
            $bloqueioTemporarioDesdeDe = $bloqueioTemporarioDesdeDe->format('Y-m-d');

            $ultimoDesbloqueioTemporarioFoiEm = new DateTime($ultimoDesbloqueioTemporarioFoiEm);
            $ultimoDesbloqueioTemporarioFoiEm = $ultimoDesbloqueioTemporarioFoiEm->format('Y-m-d');


            $result = $mysqli->query("INSERT INTO fin_cobrancasclienteplanos(
                    plan_planos_codplano,
                    codcobrancasclienteplanos,
                    fin_cobrancascliente_codcobrancascliente, 
                    dataativacao, 
                    datadesativacao, 
                    datadesativado, 
                    com_dataVencimento, 
                    bloqueioTemporarioDesdeDe, 
                    ultimoDesbloqueioTemporarioFoiEm, 
                    codendereco)
                VALUES(
                    $cod_plano, 
                    $cod_cobranca,
                    $cod_cobranca, 
                    '$dataativacao', 
                    '$datadesativacao', 
                    '$datadesativado', 
                    '$com_dataVencimento', 
                    '$bloqueioTemporarioDesdeDe', 
                    '$ultimoDesbloqueioTemporarioFoiEm', 
                    $cod_endereco)");


            //echo 'break para realizar teste';
            //exit;
        }
 
        if($result ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }

    
    }
