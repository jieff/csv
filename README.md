# csv

## DockerFile

O arquivo Dockerfile � respons�vel por baixar o servidor apache e o php na vers�o expecificada, roda um comando que mover as informa��es do arquivo php.ini da estrutura do projeto, para dentro do container, instala a dependencia mysqli no apache para fazer a conex�o com o banco de dados.

## Docker-compose.yml

 - Cria um servico para rodar o APACHE + PHP, configura��es de restart, porta e volume.
 - Cria um servico para rodar o MYSQL, configura��es de restart, porta, vari�vel do usu�rio root e volume.

 Rodar a aplica��o utilizando o docker compose
 
```
    docker-compose up -d
```


## Tabelas

```json
{
    "tabela": "pat_localizacoes",
    "campos": {
        "codlocalizacao": "int",
        "descricao": "string"
    }
}

```