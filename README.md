
![ksys csv](https://static.wixstatic.com/media/a04bab_224af577ba684faa87618bd7e6c7ba16~mv2.png/v1/fill/w_520,h_132,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/a04bab_224af577ba684faa87618bd7e6c7ba16~mv2.png "Author: Jieff Cavalcanti")


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