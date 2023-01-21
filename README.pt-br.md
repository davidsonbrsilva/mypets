# Mypets

![Status](https://img.shields.io/badge/status-deprecated-red)

[See in English](README.md)

Mypets é uma simples rede social e e-commerce para pet shops.

## Pré-requisitos

### Tecnologias

- [PHP](https://www.php.net/downloads.php) versão 7.0.0 ou acima. Verificado com a [versão 7.3.7](https://www.php.net/releases/);
- Um Sistema de Gerenciamento de Banco de Dados (SGBD). Nós usamos [MySQL](https://dev.mysql.com/downloads/installer/) por padrão;
- [Composer](https://getcomposer.org/download/) Package Manager (nós usamos a versão 1.9.0);
- Cliente REST para testar as rotas da API (nós recomendamos [Insomnia](https://insomnia.rest/download/));

### Configuração

- Crie um banco de dados vazio chamado `mypets` através do seu SGBD;

## Instalação

- Clone este repositório;
- Navegue até a pasta raiz do projeto;
- Duplique o arquivo `.env.example` e renomeie-o para `.env`; 
- Abra o arquivo `.env` em seu editor de texto para inserir sua configuração de banco de dados. Os valores padrão são:

  ```
  DB_CONNECTION: mysql
  DB_USERNAME: root
  DB_PASSWORD: 
  ```
  
- Abra o seu terminal na pasta raiz e digite os seguintes comandos:

  - `composer install`.  
     Isso instala todas as dependências da aplicação;
     
  - `composer dump-autoload`.  
     Isso carrega o autoload da aplicação;

  - `php artisan key:generate`.  
     Isso gera uma chave para a aplicação;

  - `php artisan migrate`.  
     Isso cria as tabelas do projeto no banco de dados;
     
  - `php artisan db:seed` (optional).  
     Isso cria dados fictícios para alimentar o banco de dados.
     
  - `php artisan serve`.  
     Isso inicia o servidor de desenvolvimento para ouvir nossas requisições no ip e porta específicados (localhost:8000 por padrão).
     
##### Observação:

Se você obtiver o erro

```
'Could not scan for classes inside "database/factories" which does not appear to be a file nor a folder'
```
crie a pasta 'factories' no diretório 'database'.

     
## Uso

- Abra seu cliente REST. Nós recomendamos Insomnia, mas, sinta-se livre para escolher o seu.
- Envie requisições conforme a [especificação de API](https://github.com/davidsonbrsilva/mypets/wiki/Api) para obter dados em formato JSON.

## Suporte

Veja nossa [Wiki](https://github.com/davidsonbrsilva/mypets/wiki).

## Contato

Envie um e-mail para <davidsonbruno@outlook.com>.

## Licença

Este projeto é mantido pela [Licença do MIT](LICENSE.md).
