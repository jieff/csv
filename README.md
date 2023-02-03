# csv

## DockerFile

O arquivo Dockerfile é responsável por baixar o servidor apache e o php na versão expecificada, roda um comando que mover as informações do arquivo php.ini da estrutura do projeto, para dentro do container, instala a dependencia mysqli no apache para fazer a conexão com o banco de dados.

## Docker-compose.yml

 - Cria um servico para rodar o APACHE + PHP, configurações de restart, porta e volume.
 - Cria um servico para rodar o MYSQL, configurações de restart, porta, variável do usuário root e volume.

 Rodar a aplicação utilizando o docker compose
 
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