# csv

## DockerFile (Opcional)

O arquivo Dockerfile � respons�vel por baixar o servidor apache e o php na vers�o expecificada, roda um comando que mover as informa��es do arquivo php.ini da estrutura do projeto, para dentro do container, instala a dependencia mysqli no apache para fazer a conex�o com o banco de dados.

## Docker-compose.yml (Opcional)

 - Cria um servico para rodar o APACHE + PHP, configura��es de restart, porta e volume.
 - Cria um servico para rodar o MYSQL, configura��es de restart, porta, vari�vel do usu�rio root e volume.

 Rodar a aplica��o utilizando o docker compose
 
```
    docker-compose up -d
```

Caso utilize o docker-compose, basta digitar no navegador localhost


## Composer (Gerenciador de depend�ncias)

- Segue refer�ncia oficial abaixo para instala��o do gerenciador de dependencias composer.

Foi instalado para utilizar a lib dotenv no gerenciamento das variav�is de ambiente. 

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