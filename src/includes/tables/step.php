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

    <pre>
                Faz um insert na tabela [cli_celulares] campo [numero].
                OBS: cliente possuia numero fixo e numero de celular, ambos foram
                tratados e atibuidos ao cliente.

                6 - cli_celulares_trim.php (formata os numeros) 

                O campo [numero] do cliente, permite inserir mais de um numero,
                formata e atribi todos os valores.

                7 - cli_email_trim.php     (formata os e-mails)

                O campo [email] do cliente, permite iserir mais de um email,
                formata e atibui todos os valores.

                4 - cli_emails.php

                 Faz um insert na tabela [cli_clientes] nos seguintes campos:

                cli_clientes_codcliente, email
    </pre>
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
                
      10 - fin_cobrancascliente 
                1 - importacao da tabela [fin_cobrancascliente]
                2 - exportar a tabela [cli_enderecos] em csv para pegar o campo [codendereco] e fazer um update em [fin_cobrancascliente].

            11 - codendereco.php 

                Realiza um update na tabela [fin_cobrancacliente] campo [cli_enderecos_codendereco] passando o valor referente
                a codendereco vindo do arquivo csv.
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
                
            12 - fin_cobrancasclienteplanos_contrato
            ________________

            substituido
            5 - contas_acesso.php ( campo situacao tabela cli_clientes, refere-se ao status do cliente no sistema) 
    </div>
    </div>
  </div>
</div>      
</div>




