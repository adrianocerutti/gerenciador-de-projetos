# Gerenciador de Projetos

Repositório inicial da aplicação desenvolvida no curso "Projeto prático Laravel - Sistema de gerenciamento de projetos"

Projeto utiliza framework Laravel 8 e MySQL

# Iniciando o projeto

É preciso realizar o clone do repositório

https://github.com/adrianocerutti/gerenciador-de-projetos.git

# Instalando as dependências

Abra a pasta no VS Code. Abra o terminal do sistema ou o terminal do próprio VS Code e digite o comando:

composer update

# Criando e configurando o arquivo de ambiente

Abra o arquivo .env.example e salve-o com o nome .env na raíz do projeto.

    * configurações do banco de dados
    - DB_CONNECTION=mysql
    - DB_HOST=127.0.0.1
    - DB_PORT=3306
    - DB_DATABASE=nome_do_seu_banco
    - DB_USERNAME=nome_do_seu_usuário
    - DB_PASSWORD=senha_do_seu_banco

Abra o terminal do sistema ou o terminal do próprio VS Code e digite o comando para gerar a chave da aplicação:

php artisan key:generate

O campo APP_KEY será preenchido automaticamente com a chave gerada.

# Criando o banco de dados

Abra o MySQL Workbench ou qualquer outro gerenciador de banco de dados e digite o comando e depois execute:

create database <nome_do_seu_banco>;

## Criando as tabelas do banco de dados

De volta ao VS Code, abra o terminal e digite o comando:

php artisan migrate

# Rodando a aplicação

No terminal e digite o comando:

php artisan serve
