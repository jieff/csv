# csv

## DockerFile (Opcional)

O arquivo Dockerfile é responsável por baixar o servidor apache e o php na versão expecificada, roda um comando que mover as informações do arquivo php.ini da estrutura do projeto, para dentro do container, instala a dependencia mysqli no apache para fazer a conexão com o banco de dados.

## Docker-compose.yml (Opcional)

 - Cria um servico para rodar o APACHE + PHP, configurações de restart, porta e volume.
 - Cria um servico para rodar o MYSQL, configurações de restart, porta, variável do usuário root e volume.

 Rodar a aplicação utilizando o docker compose
 
```
    docker-compose up -d
```

Caso utilize o docker-compose, basta digitar no navegador localhost


## Composer (Gerenciador de dependências)

- Segue referência oficial abaixo para instalação do gerenciador de dependencias composer.

Foi instalado para utilizar a lib dotenv no gerenciamento das variavéis de ambiente. 

```
    https://getcomposer.org/doc/00-intro.md
```


<!--
```json
{
    "tabela": "pat_localizacoes",
    "campos": {
        "codlocalizacao": "int",
        "descricao": "string"
    }
},
{
    "tabela": "pat_equipamentos",
    "campos":{
        "descricao": "",
        "numeroserial":"",
        "ip":"",
        "datacompra":"",
        "obs":"",
        "porta":"",
        "dataprimeiraassociacaocliente":"",
        "dataultimaassociaacaocliente":""
    }
}

```
->