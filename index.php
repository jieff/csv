<?php require './src/includes/header.html'; ?>


    <div class="container mt-3">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4 ">Bemtevi Importar</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-filetype-csv" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.517 14.841a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.001 1.001 0 0 0-.375-.357 2.027 2.027 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.624.624 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.551.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.559.559 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765ZM.806 13.693c0-.248.034-.46.102-.633a.868.868 0 0 1 .302-.399.814.814 0 0 1 .475-.137c.15 0 .283.032.398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.441 1.441 0 0 0-.489-.272 1.838 1.838 0 0 0-.606-.097c-.356 0-.66.074-.911.223-.25.148-.44.359-.572.632-.13.274-.196.6-.196.979v.498c0 .379.064.704.193.976.131.271.322.48.572.626.25.145.554.217.914.217.293 0 .554-.055.785-.164.23-.11.414-.26.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.799.799 0 0 1-.118.363.7.7 0 0 1-.272.25.874.874 0 0 1-.401.087.845.845 0 0 1-.478-.132.833.833 0 0 1-.299-.392 1.699 1.699 0 0 1-.102-.627v-.495Zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879l-1.327 4Z"/>
        </svg>
      </a>
    </header>
    </div>

   
        <div class="p-5 mb-4 bg-light rounded-3 ">
            <div class="col-md-8">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2>Upload
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-filetype-csv" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.517 14.841a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.001 1.001 0 0 0-.375-.357 2.027 2.027 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.624.624 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.551.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.559.559 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765ZM.806 13.693c0-.248.034-.46.102-.633a.868.868 0 0 1 .302-.399.814.814 0 0 1 .475-.137c.15 0 .283.032.398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.441 1.441 0 0 0-.489-.272 1.838 1.838 0 0 0-.606-.097c-.356 0-.66.074-.911.223-.25.148-.44.359-.572.632-.13.274-.196.6-.196.979v.498c0 .379.064.704.193.976.131.271.322.48.572.626.25.145.554.217.914.217.293 0 .554-.055.785-.164.23-.11.414-.26.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.799.799 0 0 1-.118.363.7.7 0 0 1-.272.25.874.874 0 0 1-.401.087.845.845 0 0 1-.478-.132.833.833 0 0 1-.299-.392 1.699 1.699 0 0 1-.102-.627v-.495Zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879l-1.327 4Z"/>
                        </svg>
                        </h2>
                        <form  method="POST" action="./src/codendereco.php" enctype="multipart/form-data">
                            <label for="">Arquivo</label>
                            <input class="btn btn-outline-light" type="file" name="file">
                            <!--<label for="">Tabela</label>
                            <select>
                                <option>-- INSERIR REGISTRO --</option>
                                <option>cli_clientes</option>
                                <option>cli_enderecos</option>
                                <option>cli_celulares</option>
                                <option>cli_emails</option>
                                <option>-- FORMATAR TABELA --</option>
                                <option>cli_celulares_trim</option>
                                <option>cli_email_trim</option>
                            </select> -->
                            <button class="btn btn-outline-light" type="submit">Enviar</button>
                        </form>
                </div>
            </div>
        </div>

        
        <div class="p-5 mb-4 bg-light rounded-3 ">
            <pre>
            Passos para importar base no Bemtevi:

            1 - cli_clientes.php
                
                Faz um insert dos seguintes campos na tabela [cli_clientes]:
               
                codcliente, 
                nome, 
                cpfcnpj, 
                datanascimento, 
                pessoafisica, 
                rg, 
                estadocivil, 
                inscricaoestadual, 
                nomepai, 
                nomemae, 
                nomefantasia, 
                obs.


            2 - cli_enderecos.php 

                Faz um insert com os seguintes campos na tabela [cli_enderecos]:
                
                cli_clientes_codcliente, 
                rua, 
                complemento, 
                bairro, 
                cep, 
                obs

                Faz um update nos seguintes campos na tabela [cli_enderecos]:

                sis_cidades_codcidade,
                sis_cidades_sis_estados_codestado

                * obs: cidade e estado os valores foram definidos manualmente.

            3 - cli_celulares.php

                Faz um insert na tabela [cli_celulares] campo [numero].
                OBS: cliente possuia numero fixo e numero de celular, ambos foram
                tratados e atibuidos ao cliente.

            4 - cli_emails.php

                Faz um insert na tabela [cli_clientes] nos seguintes campos:

                cli_clientes_codcliente, email


            6 - cli_celulares_trim.php (formata os numeros) 

                O campo [numero] do cliente, permite inserir mais de um numero,
                formata e atribi todos os valores.

            7 - cli_email_trim.php     (formata os e-mails)

                O campo [email] do cliente, permite iserir mais de um email,
                formata e atibui todos os valores.

            8 - campo [centralassinantestatus] tabela [cli_clientes]([valor]=31, seta alterar senha,
                                             consultar extrato, consultar cobrancas,
                                             permitir gerar 2 cobranca, gerenciar emails)

            9 - ativo.php (Nova Lista de clientes Ativos) tabela: [cli_clientes]

            10 - fin_cobrancascliente 
                 OBS: Apos a importacao da tabela [fin_cobrancascliente], exportar a tabela [cli_enderecos] em csv para 
                 pegar o campo [codendereco] e fazer um update em [fin_cobrancascliente].

            11 - codendereco.php 

                Realiza um update na tabela [fin_cobrancacliente] campo [cli_enderecos_codendereco] passando o valor referente
                a codendereco vindo do arquivo csv.

            ________________

            substituido
            5 - contas_acesso.php ( campo situacao tabela cli_clientes, refere-se ao status do cliente no sistema) 

            </pre>
        </div>

           

<?php require './src/includes/footer.html'; ?>