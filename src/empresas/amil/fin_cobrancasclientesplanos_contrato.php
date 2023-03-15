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
            
            $codcliente = mb_convert_encoding($data[0], "utf-8");
            $codPlano   = mb_convert_encoding($data[7], "utf-8");
            $PK_codCobrancaClientePlano = mb_convert_encoding($data[0], "utf-8");
            $codContrato = 1;
            $dataHoraCadastro = mb_convert_encoding($data[4], "utf-8");

            //formata a data do cliente para o padrão Y-m-d
            $dataInicioVigenciaContrato = new DateTime($dataInicioVigenciaContrato);
            $dataInicioVigenciaContrato = $dataInicioVigenciaContrato->format('Y-m-d');

            $dataFimVigenciaContrato = new DateTime($dataFimVigenciaContrato);
            $dataFimVigenciaContrato = $dataFimVigenciaContrato->format('Y-m-d');

            $dataProximoReajuste = new DateTime($dataProximoReajuste);
            $dataProximoReajuste = $dataProximoReajuste->format('Y-m-d');

            $dataHoraCadastro = new DateTime($dataHoraCadastro);
            $dataHoraCadastro = $dataHoraCadastro->format('Y-m-d');
            
            
            $result = $mysqli->query("INSERT INTO fin_cobrancasclienteplanos_contrato (codcliente, codPlano, 
                                dataInicioVigenciaContrato, dataFimVigenciaContrato, dataProximoReajuste, PK_codCobrancaClientePlano, codContrato, dataHoraCadastro) 
            VALUES( $codcliente, $codPlano, '$dataInicioVigenciaContrato', '$dataFimVigenciaContrato', '$dataProximoReajuste', $PK_codCobrancaClientePlano, '$codContrato', '$dataHoraCadastro')");
            
                                    
        }
 

        if($result ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
