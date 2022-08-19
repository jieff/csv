<?php

    require './conexao.php';
   
    $file = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];

    $ext = explode(".", $name);

    $extension = end($ext);

    /** verifica de a extensão do arquivo trata-se de um csv
     *  em cado de positivo entra no else, para fazer a leitura do mesmo e extrair as informações
     */
    if($extension != "csv"){
        echo "Extensão Inválida";
    } else {

        $object = fopen($file, 'r');

        // Pegar o campo numerocelular, telefonefixo da A mil e insere no campo numero do bemtevi
        while(($data = fgetcsv($object, 1000, ",")) !== FALSE)
        {
            
            /** captura a primeira posição do arquivo */
            $cli_clientes_codcliente = mb_convert_encoding($data[0], "utf-8");

            /** captura a posição 15 e 16 referente a telefone fixo e celular */
            $telefonefixo    = mb_convert_encoding($data[15], "utf-8");
            $numerocelular   = mb_convert_encoding($data[16], "utf-8");
             
            /** realiza a query de insert na tabela cli_celulares */
            $telefonefixo    = $mysqli->query("INSERT INTO cli_celulares ( cli_clientes_codcliente, numero ) VALUES ( $cli_clientes_codcliente,  '$numerocelular' )");
            $numerocelular   = $mysqli->query("INSERT INTO cli_celulares ( cli_clientes_codcliente, numero ) VALUES ( $cli_clientes_codcliente,  '$telefonefixo' )");
        
            $mysqli->query("DELETE FROM cli_celulares WHERE numero='1'");
            $mysqli->query("DELETE FROM cli_celulares WHERE numero=''");

        }
 
        /** verifica o retorno das variaveis e retorna mensagem ao solicitante */
        if($telefonefixo == true && $numerocelular == true){
            echo "Dados inseridos com sucesso";
        } else {
            echo "Error ao inserir os dados". die($mysqli->error);
        }


    }
