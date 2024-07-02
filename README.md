CRUD Application
Este é um projeto de aplicação CRUD (Create, Read, Update, Delete) utilizando PHP e MySQL para o backend, e Bootstrap para a estilização do frontend.

Funcionalidades
Create: Adicionar novos registros ao banco de dados.
Read: Visualizar registros existentes.
Update: Editar registros existentes.
Delete: Remover registros do banco de dados.
Tecnologias Utilizadas
PHP: Linguagem de programação utilizada para a lógica de backend.
MySQL: Sistema de gerenciamento de banco de dados.
Bootstrap: Framework CSS utilizado para a estilização da aplicação.
Instalação
Clone o repositório para o seu ambiente local:

bash
Copiar código
git clone https://github.com/seu-usuario/seu-repositorio.git
Navegue até o diretório do projeto:

bash
Copiar código
cd seu-repositorio
Crie o banco de dados MySQL:

sql
Copiar código
CREATE DATABASE crud_db;
USE crud_db;
-- Execute o script SQL fornecido no diretório 'sql' para criar as tabelas necessárias
Configure a conexão com o banco de dados no arquivo config.php:

php
Copiar código
<?php
$servername = "localhost";
$username = "seu-usuario";
$password = "sua-senha";
$dbname = "crud_db";
?>
Inicie o servidor PHP:

bash
Copiar código
php -S localhost:8000
Acesse a aplicação no seu navegador:

arduino
Copiar código
http://localhost:8000
Estrutura do Projeto
index.php: Página principal da aplicação, lista todos os registros.
create.php: Página para adicionar novos registros.
update.php: Página para editar registros existentes.
delete.php: Página para confirmar e deletar registros.
config.php: Arquivo de configuração da conexão com o banco de dados.
css/: Diretório com os arquivos CSS personalizados.
sql/: Diretório com os scripts SQL para criação do banco de dados e tabelas.
Contribuição
Sinta-se à vontade para contribuir com o projeto, seja através de pull requests ou reportando issues.

Licença
Este projeto está licenciado sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.
