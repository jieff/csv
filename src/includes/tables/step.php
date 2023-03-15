<div class="p-5 mb-4 bg-light rounded-3 ">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Clientes&nbsp;<strong>#1</strong>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
                

<<<<<<< HEAD
                    <h6>Captura informacoes do cliente</h6> 
                    Esse script captura os seguintes campos:<br>

                    <pre>
                    codcliente
                    nome 
                    cpfcnpj 
                    datanascimento
                    pessoafisica 
                    rg 
                    estadocivil 
                    inscricaoestadual 
                    nomepai 
                    nomemae
                    nomefantasia 
                    obs
                    </pre>

                    script utilizado: </pre><code>cli_clientes.php</code><br><hr>
                
                    <h6>Cliente ativo</h6>
                    Nesse caso foi capturado e feito um update na tabela cliente <br>
                    o arquivo referente ao script<code> ativo.php</code><hr>
=======
                    <h6>1.1 - Informacoes referente ao cliente</h6> 

                    <p>A importacao e realizada na seguinte tabela<code> cli_clientes</code></p>

                    <pre>
                    Tipo de retorno : INSERT
                    Tabela          : cli_clientes
                    Colunas         : codcliente
                                      nome 
                                      cpfcnpj 
                                      datanascimento
                                      pessoafisica 
                                      rg 
                                      estadocivil 
                                      inscricaoestadual 
                                      nomepai 
                                      nomemae
                                      nomefantasia 
                                      obs
                    </pre>

                    script a ser utilizado: </pre><code>cli_clientes.php</code><br><hr>
                
                    <h6>1.2 - Cliente ativo</h6>

                    <p>A importacao e realizada na seguinte tabela<code> cli_clientes</code></p>
                    
                    <pre>
                      Tipo de retorno : UPDATE
                      Tabela          : cli_clientes
                      Coluna          : situacao
                    </pre>
                    
                    <p>Script a ser utilizado: <code> ativo.php</code></p>
>>>>>>> 9150f47 (primeiro commit)

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Enderecos &nbsp;<strong>#2</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
                
<<<<<<< HEAD
               <h6>Captura informacoes referente a endereco</h6></strong>
               
               <pre>
                cli_clientes_codcliente
                rua
                complemento
                bairro
                cep
                obs
                cidadeestado
               </pre>
                script utilizado: </pre><code>cli_endereco.php</code>
               <hr>

               <h6>Realiza UPDATE em cidade e estado</h6>
=======
               <h6>2.1 - Informacoes referente ao endereco</h6></strong>

               <p>A importacao e realizada na seguinte tabela<code> cli_enderecos</code></p>
               
               <pre>
                Tipo de retorno : INSERT
                Tabela          : cli_enderecos
                Colunas         : cli_clientes_codcliente
                                  rua
                                  complemento
                                  bairro
                                  cep
                                  obs
                                  cidadeestado
               </pre>
               <p> script utilizado: <code> cli_endereco.php</code></p>
               <hr>

               <h6>2.2 - Realizar UPDATE em cidade e estado</h6>
>>>>>>> 9150f47 (primeiro commit)

                Campos a serem atualizados: <br>
                <pre>
                sis_cidades_codcidade,
                sis_cidades_sis_estados_codestado
                </pre>
                
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
        Contatos &nbsp;<strong>#3</strong>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">

<<<<<<< HEAD
    <pre>
                Faz um insert na tabela [cli_celulares] campo [numero].
                OBS: cliente possuia numero fixo e numero de celular, ambos foram
                tratados e atibuidos ao cliente.

                6 - cli_celulares_trim.php (formata os numeros) 

                O campo [numero] do cliente, permite inserir mais de um numero,
                formata e atribi todos os valores.
=======
    
                      
               <h6>3.1 - Informacoes referente a celuares</h6></strong>

               <p>A importacao e realizada na seguinte tabela<code> cli_celulares</code></p>


                <pre>
                  Tipo de Retorno : INSERT
                  Tabela          : cli_celulares
                  Colunas         :


                  Faz um insert na tabela [cli_celulares] campo [numero].
                  OBS: cliente possuia numero fixo e numero de celular, ambos foram
                  tratados e atibuidos ao cliente.
                </pre>

                <p>script utilizado para formatacao dos numeros<code> cli_celulares_trim.php</code></p>
                
                <p> script utilizado: <code> cli_celulares.php</code></p>
                <hr>

                <h6>3.2 - Informacoes referente a emails</h6>

              <pre>
                
                     Faz um insert na tabela [cli_clientes] nos seguintes campos:

                     cli_clientes_codcliente, email

                      <hr>
>>>>>>> 9150f47 (primeiro commit)

                7 - cli_email_trim.php     (formata os e-mails)

                O campo [email] do cliente, permite iserir mais de um email,
                formata e atibui todos os valores.
<<<<<<< HEAD

                4 - cli_emails.php

                 Faz um insert na tabela [cli_clientes] nos seguintes campos:

                cli_clientes_codcliente, email
    </pre>
=======
              </pre>
>>>>>>> 9150f47 (primeiro commit)
      </div>
  </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Central Assinante &nbsp;<strong>#4</strong>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">

      <h6>Central do assinante</h6>

    Para deixar os valores ja setados por default:<br>
    <pre>
    alterar senha
    consultar extrato
    consultar cobrancas
    permitir gerar 2 cobrancas
    gerenciar e-mail
    </pre>
    
    
    Realizar um <code>UPDATE</code> no campo <code>centralassinantestatus</code> como o <code>valor = 31</code>.


                
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Tipo de Cobranca &nbsp;<strong>#5</strong>
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<<<<<<< HEAD
                
      10 - fin_cobrancascliente 
                1 - importacao da tabela [fin_cobrancascliente]
                2 - exportar a tabela [cli_enderecos] em csv para pegar o campo [codendereco] e fazer um update em [fin_cobrancascliente].

            11 - codendereco.php 

                Realiza um update na tabela [fin_cobrancacliente] campo [cli_enderecos_codendereco] passando o valor referente
                a codendereco vindo do arquivo csv.
=======
              
            <h6>5.1 - Informacoes relacionada ao tipo de cobranca</h6>

            <p>A importacao e realizada na seguinte tabela<code> fin_cobrancascliente</code></p>

            <p>Sao obitidos os seguintes valoes :</p>
            <pre>
                codigo do cliente
                codigo do plano
                tipo de cobranca
            </pre>

      <p> O script a ser acionado e <code> fin_cobrancasclienteplanos. </code></p><hr>

      <h6>5.2 - Codigo de Endereco</h6>
      <p>Precisa atualizar a tabela<code> fin_cobrancacliente,</code> na coluna <code> cli_enderecos_codendereco </code> passando
      o codigo do endereco vindo do csv.</p>
      <p>O csv pode ser extraido da seguinte tabela<code> cli_clientes</code></p>

      <p> O script a ser acionado e <code> codendereco </code></p><hr>

>>>>>>> 9150f47 (primeiro commit)
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Contratos &nbsp;<strong>#6</strong>
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<<<<<<< HEAD
                
            12 - fin_cobrancasclienteplanos_contrato
            ________________

            substituido
            5 - contas_acesso.php ( campo situacao tabela cli_clientes, refere-se ao status do cliente no sistema) 
    </div>
=======

          <h6>6.1 - Informacoes relacionada a Contratos</h6>

          <p>A importacao e realizada na seguinte tabela<code> fin_cobrancasclienteplanos_contrato</code></p>
                
          <pre> 
                  Tipo de Retorno :
                  Tabela          : 
                  Colunas         :
          </pre>

          <p>Script utilizado <code> fin_cobrancasclienteplanos_contrato</code></p>
>>>>>>> 9150f47 (primeiro commit)
    </div>
  </div>
</div>      
</div>




