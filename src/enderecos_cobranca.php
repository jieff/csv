<?php

    require './conexao.php';
   
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
            

            $codendereco = '';
         
            /**
             *  Aqui pega o c�digo do endere�o de cobran�a
             * 
             *  Tabela: cli_enderecos
             *  Campo : codendereco
             * 
            */

            $result = $mysqli->query("UPDATE fin_cobrancasclienteplanos SET codendereco=$codendereco WHERE codrevenda=0");
               
        }
 
        if($result ){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }

    
    }
