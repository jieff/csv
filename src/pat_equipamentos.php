<?php

    require './database/conexao.php';
   
    $file = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];

    $ext = explode(".", $name);

    $extension = end($ext);

    if($extension != "csv"){
        echo "Extens�o Inv�lida";
    } else {

        $object = fopen($file, 'r');

     
        while(($data = fgetcsv($object, 1000, ",")) !== FALSE)
        {
            
            $descricao = mb_convert_encoding($data[0], "utf-8");
            $mumeroserial = mb_convert_encoding($data[1], "utf-8");
            $ip = mb_convert_encoding($data[2], "utf-8");
            $datacompra = mb_convert_encoding($data[4], "utf-8");
            $obs = mb_convert_encoding($data[5], "utf-8");
            $porta = mb_convert_encoding($data[3], "utf-8");
            $dataprimeiraassociacaocliente = mb_convert_encoding($data[4], "utf-8");
            $dataultimaassociacaocliente = mb_convert_encoding($data[4], "utf-8");

            //formata a data do cliente para o padr�o Y-m-d
            $datacompra = new DateTime($datacompra);
            $datacompra = $datacompra->format('Y-m-d');

            //formata a data do cliente para o padr�o Y-m-d
            $dataprimeiraassociacaocliente = new DateTime($dataprimeiraassociacaocliente);
            $dataprimeiraassociacaocliente = $dataprimeiraassociacaocliente->format('Y-m-d');

            //formata a data do cliente para o padr�o Y-m-d
            $dataultimaassociacaocliente = new DateTime($dataultimaassociacaocliente);
            $dataultimaassociacaocliente = $dataultimaassociacaocliente->format('Y-m-d');
  

            $result = $mysqli->query("INSERT INTO pat_equipamentos (descricao, numeroserial, ip, datacompra, obs, porta, dataprimeiraassociacaocliente,
            dataultimaassociacaocliente) 
            VALUES ('$descricao', '$numeroserial', '$ip', '$datacompra', '$obs', '$porta', '$dataprimeiraassociacaocliente',
            '$dataultimaassociacaocliente')");
        }
 
        if($result ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
