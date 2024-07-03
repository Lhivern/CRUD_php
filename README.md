# CRUD_php

Este é um projeto de aplicação CRUD (Create, Read, Update, Delete) utilizando PHP e MySQL para o backend, e Bootstrap para a estilização do frontend.

## Funcionalidades

- **Create:** Adicionar novos registros ao banco de dados.
- **Read:** Visualizar registros existentes.
- **Update:** Editar registros existentes.
- **Delete:** Remover registros do banco de dados.

## Tecnologias Utilizadas

- **PHP:** Linguagem de programação utilizada para a lógica de backend.
- **MySQL:** Sistema de gerenciamento de banco de dados.
- **Bootstrap 5:** Framework CSS utilizado para a estilização da aplicação.

## Acesso
- O projeto pode ser acessado em [CRUD PHP](https://cfds-phpcrud.000webhostapp.com/)

## Instalação

1. Clone o repositório para o seu ambiente local:
    ```bash
    git clone https://github.com/Lhiven/CRUD_php.git
    ```

2. Navegue até o diretório do projeto:
    ```bash
    cd CRUD_php
    ```

3. Crie o banco de dados MySQL:
    ```sql
    CREATE DATABASE crud_basics;
    USE crud_basics;

    CREATE TABLE `pessoas` (
      `id` int NOT NULL,
      `nome` varchar(60) NOT NULL,
      `sobrenome` varchar(100) NOT NULL,
      `idade` int NOT NULL
    );
  
    INSERT INTO `pessoas` (`id`, `nome`, `sobrenome`, `idade`) VALUES
    (1, 'Christian', 'Souza', 23),
    (2, 'Ana Claudia', 'Oliveira', 22);
    
  
    ALTER TABLE `pessoas`
      ADD PRIMARY KEY (`id`);
    
    
    ALTER TABLE `pessoas`
      MODIFY `id` int NOT NULL AUTO_INCREMENT;

    ```

4. Configure a conexão com o banco de dados no arquivo `config.php`:
    ```php
    <?php
    $servername = "localhost";
    $username = "seu-usuario";
    $password = "sua-senha";
    $dbname = "crud_basics";
    ?>
    ```

5. Inicie o servidor PHP:
    ```bash
    php -S localhost:8000
    ```

6. Acesse a aplicação no seu navegador:
    ```
    http://localhost:8000
    ```

## Estrutura do Projeto

- **index.php:** Página principal da aplicação, lista todos os registros.
- **header.php:** Página contendo o cabeçalho padrão.
- **footer.php:** Página contendo o rodapé padrão.
- **insert_data.php:** Arquivo responsável por adicionar novos registros.
- **update_data.php:** Página para editar registros existentes.
- **delete_data.php:** Página responsável por editar registros existentes.
- **dbcon.php:** Arquivo de configuração da conexão com o banco de dados.
- **style.css**: Arquivo com o CSS personalizado.
