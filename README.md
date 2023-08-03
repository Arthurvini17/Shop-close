<h1>Shop Close</h1>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="100" alt="Laravel Logo"></a></p>
<p>Um projeto desenvolvido em Laravel, Laravel Jetstream, mysql, html e css. Esse é um projeto de  E-comerce</p>

<h3>Tecnologias usadas</h3>
<li>Laravel: framework PHP de código aberto que permite o desenvolvimento rápido e fácil de aplicativos web </li> <br>
<li>Laravel JetStream:  pacote oficial do Laravel que oferece uma estrutura para autenticação e gerenciamento de equipes de usuário. Ele inclui recursos como autenticação por e-mail, autenticação de dois fatores, configurações de perfil, gerenciamento de sessão </li> <br>
<li>MYSQL: sistema de gerenciamento de banco de dados relacional </li> <br>
<li>HTML: Linguaguem de marcação </li> <br>
<li>CSS: Linguaguem de estilização </li> <br>

<h1>Como executar o projeto (localmente)</h1>

<p>Pré-requisitos</p>
<p>Composer</p>
<p>NodeJS</p>
<p>XAMP MYSQL WORKBENCH</p>
<p>Laravel Framework</p>
<p>Laravel Jetstream</p>


<h1>Instalação</h1>

1. Clone o repositório
2. Instale o Laravel na sua máquina com o seguinte comando: "composer global require laravel/installer"
3. Na pasta .env, em DB_DATABASE, coloque o nome do seu banco de dados que irá criar no MySQL.
4. Crie manualmente o banco de dados no MySQL com o nome que você especificou em DB_DATABASE no arquivo .env.

Banco de Dados e Migrations:

O projeto utiliza o sistema de gerenciamento de banco de dados relacional MYSQL para armazenar os dados. As migrations do Laravel são amplamente utilizadas para facilitar a criação e a manutenção da estrutura do banco de dados. As migrations são arquivos de migração que contêm instruções em PHP para criar tabelas, alterar campos e definir índices, permitindo que o banco de dados seja versionado e mantido em sincronia com o código-fonte da aplicação.

Ao executar o projeto, você pode usar o comando "php artisan migrate" para aplicar todas as migrations pendentes e garantir que o banco de dados esteja atualizado de acordo com o código-fonte mais recente.

Caso precise adicionar novas tabelas ou alterar a estrutura do banco de dados, você pode criar novas migrations utilizando o comando "php artisan make:migration". Para mais informações sobre como criar migrations, consulte a documentação oficial do Laravel.



