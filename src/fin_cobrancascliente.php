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
            
            $cli_clientes_codcliente               = mb_convert_encoding($data[0], "utf-8");
            $fin_tiposcobranca_codtiposcobranca    = mb_convert_encoding($data[2], "utf-8");
            $cli_enderecos_cli_clientes_codcliente = mb_convert_encoding($data[0], "utf-8");
            $descricao;

         if($fin_tiposcobranca_codtiposcobranca == '5'){
            $fin_tiposcobranca_codtiposcobranca = 1;
            $descricao = "Widepay - Dia 05";
         } elseif ($fin_tiposcobranca_codtiposcobranca == '10') {
            $fin_tiposcobranca_codtiposcobranca = 2;
            $descricao = "Widepay - Dia 10";
         } elseif($fin_tiposcobranca_codtiposcobranca == '15'){
            $fin_tiposcobranca_codtiposcobranca = 3;
            $descricao = "Widepay - Dia 15";
         } elseif($fin_tiposcobranca_codtiposcobranca == '20'){
            $fin_tiposcobranca_codtiposcobranca = 4;
            $descricao = "Widepay - Dia 20";
         } elseif($fin_tiposcobranca_codtiposcobranca == '25'){
            $fin_tiposcobranca_codtiposcobranca = 5;
            $descricao = "Widepay - Dia 25";
         } else {
            $fin_tiposcobranca_codtiposcobranca = 6;
            $descricao = "Widepay - Dia 30";
         }
           
            //formata os campos requeridos do tipo Data para o padrão Y-m-d
            $datacobranca = new DateTime($datacobranca);
            $datacobranca = $datacobranca->format('Y-m-d');

            $especial_DataBilhetagemInicial = new DateTime($especial_DataBilhetagemInicial);
            $especial_DataBilhetagemInicial = $especial_DataBilhetagemInicial->format('Y-m-d');

            $especial_DataBilhetagemFinal = new DateTime($especial_DataBilhetagemFinal);
            $especial_DataBilhetagemFinal = $especial_DataBilhetagemFinal->format('Y-m-d');


            $result = $mysqli->query("INSERT INTO fin_cobrancascliente(cli_clientes_codcliente, fin_tiposcobranca_codtiposcobranca,
                                     cli_enderecos_cli_clientes_codcliente, descricao, datacobranca, especial_DataBilhetagemInicial, especial_DataBilhetagemFinal) 
                                    VALUES($cli_clientes_codcliente, $fin_tiposcobranca_codtiposcobranca,
                                    $cli_enderecos_cli_clientes_codcliente, '$descricao', '$datacobranca', '$especial_DataBilhetagemInicial', '$especial_DataBilhetagemFinal')");
                                    
                            
        }
 

        if($result ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
